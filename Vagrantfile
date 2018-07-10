# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure("2") do |config|
  # virtualbox setting
  config.vm.provider :virtualbox do |vb|
    vb.name = "phptest"
    vb.customize ["modifyvm", :id, "--memory", 1024]
    vb.customize ["modifyvm", :id, "--natdnsproxy1", "off"]
    vb.customize ["modifyvm", :id, "--natdnshostresolver1", "off"]
  end

  # box info
  config.vm.box = "centos/7"

  # server info
  config.vm.hostname = "PHPTEST"
  config.vm.network :private_network, ip: "192.168.56.100"
  config.vm.provision "shell", :path => "./ansible/provision.sh"

  # sync
  config.vm.synced_folder ".", "/vagrant", :mount_options => ['dmode=775', 'fmode=664']

  # cache setting
  if Vagrant.has_plugin?("vagrant-cachier")
    config.cache.scope = :box
  end

end
