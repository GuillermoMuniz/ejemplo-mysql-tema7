
Vagrant.configure("2") do |config|

  config.vm.box = "ubuntu/xenial64"
  config.vm.network "private_network", ip: "192.168.50.55"
  
  config.vm.provision "shell", inline: <<-SHELL
  
    #Generar archivo SQL con los registros de empleados/as
    echo "-- Insertar datos de ejemplo en la tabla 'empleados'" > /home/vagrant/datos_empleados.sql
    echo " INSERT INTO gestion_empleados.empleados (nombre, apellido, edad, salario, departamento) VALUES" >> /home/vagrant/datos_empleados.sql
    echo "('Juan', 'Pérez', 30, 2000.00, 'Ventas')," >> /home/vagrant/datos_empleados.sql
    echo "('Manolo', 'Pérez', 40, 2500.00, 'Ventas')," >> /home/vagrant/datos_empleados.sql
    echo "('Lucía', 'Pérez', 50, 1000.00, 'Ventas')," >> /home/vagrant/datos_empleados.sql
    echo "('Teresa', 'Pérez', 10, 2500.00, 'Marketing')," >> /home/vagrant/datos_empleados.sql
    echo "('Pepito', 'Martínez', 5, 2500.00, 'Ventas')" >> /home/vagrant/datos_empleados.sql
  SHELL

end