# Crea una nueva Unidad Organizativa (OU) en Active Directory
New-ADOrganizationalUnit -Name "NombreDeLaOU" -path "DC=Dominio,DC=com"

#New-ADOrganizationalUnit:
#Este cmdlet se utiliza para crear una nueva Unidad Organizativa (OU) en Active Directory.

#-Name "NombreDeLaOU":
#Especifica el nombre de la nueva OU. Reemplaza "NombreDeLaOU" con el nombre real que deseas asignar a la OU.

#-path "OU=Ruta,DC=Dominio,DC=com":
#Especifica la ruta completa de la nueva OU en el árbol de Active Directory. Reemplaza "DC=Dominio,DC=com" con la ubicación real donde deseas crear la OU.
    