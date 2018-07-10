#!/usr/bin/env bash

if ! [ `which ansible` ]; then
  yum install -y epel-release
  yum install -y ansible
fi

cp /vagrant/ansible/ansible.cfg ./ansible.cfg
ansible-galaxy install -f geerlingguy.ruby
ansible-playbook -i /vagrant/ansible/hosts /vagrant/ansible/playbook.yml
