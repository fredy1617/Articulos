# -*- coding: utf-8 -*-
"""
Created on Tue Jul 17 20:36:43 2018

@author: Alfredo
"""
#________IMPORTACIONES DE LIBRERIAS__________________________________
import sys
from Tkinter import *
import ttk as ttk
from tkMessageBox import *

import MySQLdb
#se hace la conexxion a la base de datos
db = MySQLdb.connect(host="localhost", user="root",passwd="", db="articulos")
#se crea un cusro para poder usar la base de datos
cursor = db.cursor()

#-------------------------------------------------------------------------------------------    
def Todo():
    
    registros={}
    
    with open ("scholar.txt") as file:
        """Aqui vemos de donde iniciara el id de base si tienen o no registros
            para iniciar desde donde se quedo cada que carguen un txt nuevo"""
        if cursor.execute("SELECT id FROM bases ORDER BY id DESC limit 1")==0:
            cont=0
        else:
            for x in cursor:
                aux=list(x) 
            cont=int(aux[0])
        #INICIAMOS A RECORRER EL TXT Y SEPARAR VALORES    
        for line in file: 
            line.strip()
            line = line.split ('=')
            line[0]=line[0].split()
            #print line[0]
            if line==[[]]:
                line[0]=''
            elif line[0]==['title']:
                title=line[1][1:-3]
                #print 'var Title:', title
                registros['Title']=title
            elif line[0]==['author']:
                author=line[1][1:-3]
                lista_autores=author.split('and')
                #print 'var Author:',lista_autores
                registros['Authors']=lista_autores
            elif line[0]==['year']:
                year=line[1][1:-3]
                #print 'var Year:', year
                registros['Year']=year
            elif line[0]==['journal']:
                journal=line[1][1:-3]
                #print 'var Journal:', journal
                registros['Journal']=journal
            elif line[0]==['type']:
                Type=line[1][1:-3]
                #print 'var Journal:', journal
                registros['Type']=Type
            elif line[0]==['}']:
                    cont+=1
                    if not 'Title'in registros.keys():
                        registros['Title']=''
                    if not 'Authors'in registros.keys():
                        registros['Authors']=''
                    if not 'Year'in registros.keys():
                        registros['Year']=''
                    if not 'Journal'in registros.keys():
                        registros['Journal']=''
                    if not 'Type'in registros.keys():
                        registros['Type']='Pending'
                    
                    #VERIFICAMOS QUE NO SE REPITAN LOS ARTICULOS
                    if  Checar(registros['Title'])==True:
                        if askyesno('Verificar', 'El articulo: \n \n "'+registros['Title']+'" \n \n  Ya fue registrado ¿Desea GUARDARLO nuevamente?'):
                            print "Se INSERTA"
                        else:
                            print "No se INSERTA"
                    else:
                        #INICIAMOS CON LA INSERCION DE LOS REGISTROS*******
                        
                        #INSERCION A BASE-->
                        #print TableBase(registros)
                        #INCERCION A AUTORES-->
                        #print TableAutores(registros['Authors'])
                        #SE LIMPIA EL DICCIONARIO PARA OTRO REGISTRO
                        registros={}

        
#-------------------------------------------------------------------------------------------                    
def TableBase(values):   
    lista_review=[]
    cursor.execute("SELECT nombre FROM revistas")
    
    for N in cursor:
        lista_review.append((list(N))[0].upper())

    #CHECAMOS QUE LA REVISTA ESTE REGISTRADA PARA OBTENER EL ID        
    if values['Journal']=='':
        id_review='0'#cualquiera que tenga id 0 esta vacio
        
    elif values['Journal'].upper() in lista_review:
        cursor.execute("SELECT id FROM revistas WHERE nombre='"+values['Journal']+"'")
        id_review=str(list(cursor.fetchall())[0][0])
        print 'Si esta en la revistas y este es su id:',id_review
        
    else:  
        id_review='1'#cualquiera que tenga id 1 tendra que checar el nombre de la revista   
     
    #SENTENCIA PARA LA INCERCION     
    Base_Instert=("INSERT INTO `bases` (`titulo`, `year`, `id_revista`, `tipo`) VALUES ( '"+values['Title']+"', '"+values['Year']+"', '"+id_review+"', '"+values['Type']+"')")
    print Base_Instert
    try:
        cursor.execute(Base_Instert)
        db.commit()
        return "Se realizo la insercion"
    except:
        return "No se hizo la insercion"
        
#-------------------------------------------------------------------------------------------    
def TableAutores(autores):
    columnas=""
    values=""
    cont=0
    #SE CREA UN STRIG CON TODOS LOS NOMBRES Y SE RECORRE LA LISTA PARA INSERTAR TODO
    for nombre in autores:
        cont+=1
        separa=nombre.split(',')
        if cont>1:
            columnas+=","
            values+=","
        columnas+="`Nombre_"+str(cont)+"`,`Apellido_"+str(cont)+"`"
        values+="'"+separa[1]+"','"+separa[0]+"'"   
        
     #SE OBTIENE EL ID DE BASE 
    cursor.execute("SELECT id FROM bases ORDER BY id DESC limit 1")
    id_base=str(list(cursor.fetchall())[0][0])
    #SE CREA LA SENTENCIA DE INSERCION
    instert="INSERT INTO `autores` (`id_info`,"+columnas+") VALUES ('"+id_base+"',"+values+")"
    print instert
    try:
        cursor.execute(instert)
        db.commit()
        return "Auntores Guardados"
    except:
        return "No se hizo la insercion Autores"    
        
        
#-------------------------------------------------------------------------------------------    
def Checar(nombre):
    lista_articulos=[]
    cursor.execute("SELECT titulo FROM bases")
    
    for N in cursor:
        lista_articulos.append((list(N))[0].upper())
        
    if nombre.upper() in lista_articulos:
        return True
        
        
        
#____CREAMOS NUESTRO TKINTER EN app__________________________________        
app = Tk()
app.title("Past Continuous")
#COLOR DE LA PORTADA
Color="#006400"
#LETRA QUE USARA LA PORTADA
Letras="Arial"
app.config(bg=Color)
#____________________________________________________________________

#________Insertamos las imagenes a utilizar__________________________
#Logo_I = PhotoImage(file="img/ingles.gif")

#____________________________________________________________________

#ventana Principal
#______CREAMOS NUESTRA VENTANA SE LLAMA vp___________________________
vp = Frame(app)
vp.grid( padx = (150, 150), pady = (20, 20))
vp.columnconfigure(0, weight = 1)
vp.rowconfigure(0, weight = 1)
vp.config(bg=Color)
#____________________________________________________________________
#logoI = Label(vp, image=Logo_I)
#logoI.grid(column = 1, row = 1)

Titlulo = Label(vp, text = "Important !! ",bg=Color, font=(Letras,20,"bold"),fg="#8d0000")
Titlulo.grid(column = 2, row = 1)
#____________________________________________________________________


#_________PONEMOS UN TEXTO QUE SE MOSTRARA EN vp_____________________
Enuncia = Label(vp, text = "1. El archivo se debe de llamar scholar.txt \n / The file should be called scholar.txt ",bg=Color,font=(Letras,14))
Enuncia.grid(column = 2, row = 2)
Enuncia2 = Label(vp, text = "2. Estructura del archivo  / Structure of the file : ",bg=Color,font=(Letras,14))
Enuncia2.grid(column = 2, row = 3)
Enuncia3 = Label(vp, text = "@article{0117,                  \ntitle={title} ,          \n author={author},   \n journal={journal}, \n year={2011} ,      \n}                                    \n",bg=Color,font=(Letras,12))
Enuncia3.grid(column = 2, row = 4)
#____________________________________________________________________


#____ES EL BOTON QUE ACTIVA LA FUNCION DE Todo_____________________
boton=Button(vp, text = "Start", command =Todo,font=("Times",18,"bold"),activebackground="Red", activeforeground="White", borderwidth=4)
boton.grid(column =2, row = 6)
#____________________________________________________________________

paso = Label(vp, text = "\n",bg=Color)
paso.grid(column = 2, row = 8)


#______AQUI TERMINA Y CREAMOS COMO PRINCIPAL NUESTRA VENTANA_________
app.mainloop()
#____________________________________________________________________


#______AQUI TERMINA Y CERRAMOS LA CONECCION A LA DB_________________
db.close()
#____________________________________________________________________