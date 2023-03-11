# FTP Troubles 
Your company was just the victim of a ransomware attack. The source of the breach was tracked down to one device using the File Transfer Protocol (FTP). Can you find the password hash that was used to infiltrate your company?
<details>
  <summary>Click to Reveal Flag</details>
  Flag: CTF(FTP_1S_NOT_S3CUR3)
</details>
Description:<br>
To capture this flag, you have to analyze a Wireshark .pcap file. In this .pcap file, you will find an FTP communication with an unsalted password hash in it. Extract the password hash and decrypt it to reveal the flag.
