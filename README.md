# Wi-Fi-Hedge #
### Linux based MITM (Man In The Middle) protection for smart-phones accessing a Public Wi-Fi. ###


_A network level access control system with web interface where users have to select a list of web services they will be using during their connection over that public Wi-Fi. It incorporates various automated procedures to restrict any malicious activites (mostly MITM) from an attacker._

_Presented as a proof of concept during Cyber Security Research and Innovation contest; sponsored by US Consulate, Chennai and implemented by Learning Links Foundation  2015-2016.

### Working Flow and Necessary Informations: ###

 1. Uses IP Tables to initally restrict any Internet access once a user connects to the Wi-Fi access point.
 2. A web interface prompts the user to select the web services (in checklists) that they will be accessing over that public Wi-Fi.
 3. User provided web services are pinged and then allowed for browsing. 
 4. Any forced connections besides the checked ones are blocked completely using real-time traffic analysis and custom rules configured in [Snort](https://www.snort.org/)  
 5. IDS Rules, IP Tables, pings etc are all managed using individual or integral shell scripts. 
 
 Tags: BASH script, Linux, Snort, IDS, PHP, IP Tables, Apache

***Notes***

This repository contains most of the scripts and PHP codes used.

Scripts and PHP codes are ***NOT*** compatible different distributions of Linux or OSX or Windows. It is only for analyzing the procedure and strictly for educational purposes.

Snort is installed in its default configurations.

Apache server is required on a Linux machine for PHP->BASH functionality. 
