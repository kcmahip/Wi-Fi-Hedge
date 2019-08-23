clear     
sed -i -e "1d" /home/mahip/Desktop/bigmac.txt
arping -c 1 -I wlan1 $1 >> mac.txt
sed -n '2p' mac.txt > extracted_mac.txt
mac=$(grep -o -E '([[:xdigit:]]{1,2}:){5}[[:xdigit:]]{1,2}' extracted_mac.txt)
echo $mac
echo "$mac" | sudo tee -a /home/mahip/Desktop/bigmac.txt
rm mac.txt
rm extracted_mac.txt





