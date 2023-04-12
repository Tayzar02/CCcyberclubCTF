You have been given a packet capture file (capture.pcapng) from a compromised network. Can you find the flag that was sent over the network in plaintext? 
<details>
<summary>Click To Reveal Flag</summary>
  CTF(network_security_challenge)
</details>
  
Solution: 
The first step in solving this challenge is to analyze the packet capture file to look for any plaintext flags that were sent over the network. One way to do this is to use a packet analyzer tool like Wireshark. Open the capture.pcapng file in
Wireshark, and then use the "Find Packet" feature to search for the string "flag"

    1. Click "Edit" from the menu bar, and then select "Find Packet". 
    2. In the "Find Packet" dialog box, enter "flag" (without quotes) in the "String" field, and then click "Find", 

Wireshark will then search the packet capture file for any packets that contain the string "flag". In this case, we will assume that the flag was sent over HTTP. One packet that contains the string "flag" is a HTTP POST request that contains a message body with the flag. To view the message body, follow these steps: 

    1. Select the packet that contains the HTTP POST request. 
    2. Expand the "Hypertext Transfer Protocol" section in the packet details pane. 
    3. Expand the "POST /" section in the "Hypertext Transfer Protocol" section. 
    4. Click the "Message Body" section. 

The message body will be displayed in the "Packet Bytes" section of the packet details pane.
