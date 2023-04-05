You have intercepted the following message: 
jL30Nw6wGcmvHXxW6Q8XbJPrhGzixKjAzfWof2E=  
It appears to be encoded with base64, but when decoded, it doesn't make any sense. Can you figure out what it means? 
<details>
  <summary>Click to reveal flag</summary>
  Flag: CTF(sgtroeome)
</details>
Solution:<br>   
The message is encoded with base64, so the first step is to decode it. This can be done using an
online decoder or a command-line tool like base64:

```bash
Shell 
$ echo "jL30Nw6wGcmvHXxW6Q8XbJPrhGzixKjAzfWof2E=" | base64 -d
YzJkMGNtVnpkM0ZzYVhSbExtTnZiUT09Cg==  
```

The decoded message appears to be encoded again, but it's not clear what encoding was used.
However, the trailing == suggests that it might be encoded with base64 again. Decoding it again
produces the final message:
```bash
shell 
$ echo "YzJkMGNtVnpkM0ZzYVhSbExtTnZiUT09Cg==" | base64 -d 
c2d0cm9lNvbWU=  
```
This message is also encoded with base64, but it's a valid base64-encoded message that decodes to
the plaintext sgtroeome.
