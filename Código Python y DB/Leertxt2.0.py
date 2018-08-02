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
            if '@' in line:
                ide=line.split('{')
                ide=ide[1].split()
                id_art=ide[0][0:4]
                #print id_art
                registros['ID']=id_art
            line = line.split ('=')
            line[0]=line[0].split()
            #print line[0]
            if line==[[]]:
                line[0]=''
            elif line[0]==['title']:
                x=(line[1].find('{'))+1
                y=line[1].find('}')
                title=line[1][x:y]
                #print 'var Title:', title
                registros['Title']=title
            elif line[0]==['author']:
                x=(line[1].find('{'))+1
                y=line[1].find('}')
                author=line[1][x:y]
                lista_autores=author.split(' and ')
                #print 'var Author:',lista_autores
                registros['Authors']=lista_autores
            elif line[0]==['year']:
                x=(line[1].find('{'))+1
                y=line[1].find('}')
                year=line[1][x:y]
               # print 'var Year:', year
                registros['Year']=year
            elif line[0]==['journal']:
                y=line[1].find('}')
                x=(line[1].find('{'))+1
                journal=line[1][x:y]
               # print 'var Journal:', journal
                registros['Journal']=journal
            elif line[0]==['type']:                
                x=(line[1].find('{'))+1
                y=line[1].find('}')
                Type=line[1][x:y]
                #print 'var Type:', Type
                registros['Type']=Type
            elif line[0]==['}']:
                    cont+=1
                    if not 'Title'in registros.keys():
                        registros['Title']=''
                    if not 'Authors'in registros.keys():
                        registros['Authors']=''
                    if not 'Year'in registros.keys():
                        registros['Year']='0'
                    if not 'Journal'in registros.keys():
                        registros['Journal']=''
                    if not 'Type'in registros.keys():
                        registros['Type']='Pending'
                    #VERIFICAMOS QUE NO SE REPITAN LOS ARTICULOS
                    if  Checar(registros['Title'])==True:
                        if askyesno('Verificar', 'El articulo:    ID  '+registros['ID']+'\n \n "'+registros['Title']+'" \n \n  Ya fue registrado ¿Desea GUARDARLO nuevamente?'):
                            #print "Se INSERTA"
                            #INICIAMOS CON LA INSERCION DE LOS REGISTROS*******
                        
                            #INSERCION A BASE-->
                            print TableBase(registros)
                            #INCERCION A AUTORES-->
                            print TableAutores(registros['Authors'])
                            #SE LIMPIA EL DICCIONARIO PARA OTRO REGISTRO
                            registros={}
                        else:
                            print "No se INSERTA"
                            registros={}
                    else:
                        #INICIAMOS CON LA INSERCION DE LOS REGISTROS*******
                        
                        #INSERCION A BASE-->
                        print TableBase(registros)
                        #INCERCION A AUTORES-->
                        print TableAutores(registros['Authors'])
                        #SE LIMPIA EL DICCIONARIO PARA OTRO REGISTRO
                        registros={}

        
#-------------------------------------------------------------------------------------------                    
def TableBase(values): 
    revista=values['Journal']
    #----------------------------------------
    aux=revista.split('\&')
    cont=1
    newRevista=''
    for part in aux:
        if cont>1:    
            newRevista+='&'
        newRevista+=part
        cont+=1
    #----------------------------------------
    aux=newRevista.split('&')
    cont=1
    newRevista2=''
    for part in aux:
        if cont>1:    
            newRevista2+='and'
        newRevista2+=part
        cont+=1
    #-----------------------------------------  
    aux=revista.split('and')
    cont=1
    newRevista3=''
    for part in aux:
        if cont>1:    
            newRevista3+='&'
        newRevista3+=part
        cont+=1
        
    lista_review=[]
    cursor.execute("SELECT nombre FROM revistas")
    
    for N in cursor:
        lista_review.append((list(N))[0].upper())

    #CHECAMOS QUE LA REVISTA ESTE REGISTRADA PARA OBTENER EL ID        
    if values['Journal']=='':
        id_review='1'#cualquiera que tenga id 0 esta vacio
        #print 'VACIO'
        
    elif newRevista.upper() in lista_review:
        cursor.execute("SELECT id FROM revistas WHERE nombre='"+newRevista+"'")
        id_review=str(list(cursor.fetchall())[0][0])
        #print 'Si esta en la revistas y este es su id:',id_review
    elif newRevista2.upper() in lista_review:
        cursor.execute("SELECT id FROM revistas WHERE nombre='"+newRevista2+"'")
        id_review=str(list(cursor.fetchall())[0][0])
        #print 'Si esta en la revistas y este es su id:',id_review
    elif newRevista3.upper() in lista_review:
        cursor.execute("SELECT id FROM revistas WHERE nombre='"+newRevista3+"'")
        id_review=str(list(cursor.fetchall())[0][0])
        #print 'Si esta en la revistas y este es su id:',id_review
        
    else:  
        id_review='2'#cualquiera que tenga id 1 tendra que checar el nombre de la revista   
        #print 'NO ESTA'
    
    #SENTENCIA PARA LA INCERCION     
    Base_Instert=("INSERT INTO `bases` (`id_Art`,`titulo`, `year`, `id_revista`, `tipo`) VALUES ( '"+values['ID']+"', '"+values['Title']+"', '"+values['Year']+"', '"+id_review+"', '"+values['Type']+"')")
    print Base_Instert
    try:
        cursor.execute(Base_Instert)
        db.commit()
        return "---> 'SE INSERTO CORRECTAMENTE EL ARTICULO: "+values['ID']+" '<---"
    except:
        return " \n \n>>>>--->>>>''NO!'<<<<------<<<<< FUE INSERTO EL ARTICULO: "+values['ID']+" '<---\n \n"

        
#-------------------------------------------------------------------------------------------    
def TableAutores(autores):
    columnas=""
    values=""
    cont=0
   #SE CREA UN STRIG CON TODOS LOS NOMBRES Y SE RECORRE LA LISTA PARA INSERTAR TODO
    for nombre in autores:
        cont+=1
        if not cont>5:
            if cont>1:
                    columnas+=","
                    values+=","
            separa=nombre.split(',')
            if len(separa)==1:
                columnas+="`Nombre_"+str(cont)+"`,`Apellido_"+str(cont)+"`"
                values+="'"+separa[0]+"','-'" 
            else:
                
                columnas+="`Nombre_"+str(cont)+"`,`Apellido_"+str(cont)+"`"
                values+="'"+separa[1]+"','"+separa[0]+"'"   
    for x in range(cont+1, 6):
        cont+=1
        if cont>1:
            columnas+=","
            values+=","
        columnas+="`Nombre_"+str(cont)+"`,`Apellido_"+str(cont)+"`"
        values+="'-','-'"  

     #SE OBTIENE EL ID DE BASE 
    cursor.execute("SELECT id FROM bases ORDER BY id DESC limit 1")
    id_base=str(list(cursor.fetchall())[0][0])
    #SE CREA LA SENTENCIA DE INSERCION
    instert="INSERT INTO `autores` (`id_info`,"+columnas+") VALUES ('"+id_base+"',"+values+")"
    print instert
    try:
        cursor.execute(instert)
        db.commit()
        return "---> 'LOS AUTORES FUERON INSERTADOS'<---"
    except:
        return "\n \n---> 'LOS AUTORES >>>>--->>>>''NO!'<<<<------<<<<<  FUERON INSERTADOS'<---\n \n"   
        
    
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
Color="#588782"
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

Titlulo = Label(vp, text = "¡ Important !  ",bg=Color, font=(Letras,24,"bold"),fg="#FFFFFF")
Titlulo.grid(column = 2, row = 1)
#____________________________________________________________________

#_________PONEMOS UN TEXTO QUE SE MOSTRARA EN vp_____________________
Enuncia = Label(vp, text = "\n1. El archivo se deberá llamar scholar.txt \n / The file should be called scholar.txt ",bg=Color,font=(Letras,18))
Enuncia.grid(column = 2, row = 2)
Enuncia2 = Label(vp, text = "2. Estructura del archivo  / Structure of the file : ",bg=Color,font=(Letras,18))
Enuncia2.grid(column = 2, row = 3)
Enuncia2 = Label(vp, text = "2.1 Tiene que estar entre llaves '{ }'  / It has to be between keys '{ }' \n 2.2 Finalizar cada articulo con llave '}' / Finish each item with a key '}'  \n \n Ejemplo/ Example: \n",bg=Color,font=(Letras,12))
Enuncia2.grid(column = 2, row = 4)
Enuncia3 = Label(vp, text = "@article{0117,                  \ntitle={title} ,          \n.               author={lastname,name},   \n journal={journal}, \n year={2011} ,      \n}                                    \n",bg=Color,font=(Letras,12))
Enuncia3.grid(column = 2, row = 5)
#____________________________________________________________________


#____ES EL BOTON QUE ACTIVA LA FUNCION DE Todo_____________________
boton=Button(vp, text = "Start", command =Todo,font=("Times",18,"bold"),bg=Color,activebackground="Red", activeforeground="White", borderwidth=4)
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