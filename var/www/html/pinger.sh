clear
#rm pinged

#declare -i trials=0;
declare -i s;
s=$(shuf -i 2000-65000 -n 1)
count=$(wc -l  /var/www/html/people.txt | sed 's/ *\([0-9]* \).*/\1/')

if [ "$count" -eq "0" ]; then
	echo "FILE IS EMPTY"
else  		
		for ((i =0 ; i < $count ; i++ )); 
		do     
			echo "__________________________________"
			site=$(sed -n '1p' /var/www/html/people.txt)
			ping -c 1 $site >> pinged.txt
			echo "PING COMPLETE AND STORED IN PINGED"
			sed -n '1p' pinged.txt > extracted.txt
			echo "Extraction complete!."
			result=$(grep -o '[0-9]\{1,3\}\.[0-9]\{1,3\}\.[0-9]\{1,3\}\.[0-9]\{1,3\}' extracted.txt)
			echo $result
			echo "alert tcp $result any -> any any (msg:"TRUSTED SITE!"; sid:$s;)" | sudo tee -a /etc/snort/local.rules
       			s=s+1
			rm pinged.txt
			sed -i -e "1d" /var/www/html/people.txt
		done
		echo "reject tcp any any -> any any (msg:"DROPEED!!"; sid=10001;)" | sudo tee -a /etc/snort/local.rules
		echo "RULE FILE COMPLETE!"
		snort -A console -c  /etc/snort/snort1.conf -l /etc/snort/log/

fi






