# Solicitar datos para la nueva OU
$nombreOU = Read-Host "Ingrese el nombre de la nueva Unidad Organizativa (OU)"
$ubicacionOU = Read-Host "Ingrese la ubicación de la nueva OU (por ejemplo, 'OU=Departamento,DC=dominio,DC=com')"

# Crear la nueva OU
try {
    New-ADOrganizationalUnit -Name $nombreOU -Path $ubicacionOU -ErrorAction Stop
    Write-Host "La Unidad Organizativa '$nombreOU' se ha creado correctamente en '$ubicacionOU'."
} catch {
    Write-Host "Error al crear la Unidad Organizativa. Detalles: $_" -ForegroundColor Red
}
