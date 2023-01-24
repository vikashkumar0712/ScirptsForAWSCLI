#create a Key Pair in Us-east-1
aws ec2 create-key-pair --key-name MyKeyPair --query 'KeyMaterial' --output text > MyKeyPair.pem


#Create A security Group For Instance In Us-east-1
aws ec2 create-security-group --group-name MySecurityGroup --description "My security group"


#AddInbound Rules ini Security Group
aws ec2 authorize-security-group-ingress --group-name MySecurityGroup --protocol tcp --port 22 --cidr 0.0.0.0/0



# Spin Up instance
aws ec2 run-instances --image-id ami-096c41b309a9257a0 --count 1 --instance-type t2.micro --key-name MyKeyPair --security-group-ids sg-0ce8cd2cd672fadee


#create a Key Pair in Us-east-2
aws ec2 create-key-pair --key-name MyKeeyPair --query 'KeyMaterial' --output text > MyKeyPair.pem


#Create new Security Group In different region which is us-east-2
aws ec2 create-security-group --group-name NewSG --description "My security group" --region us-east-2


#Edit Inbound rules for Security Group
aws ec2 authorize-security-group-ingress --group-name NewSG --protocol tcp --port 22 --cidr 0.0.0.0/0 --region us-east-2


#Spin Up instance
aws ec2 run-instances --image-id ami-0a606d8395a538502 --count 1 --instance-type t2.micro --key-name MyKeyPair --security-groups NewSG --region us-east-2
