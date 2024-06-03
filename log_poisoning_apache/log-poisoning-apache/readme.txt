This is an apache web application with a built-in LFI. 

This is meant as an exercise for log poisoning

In order to make it vulnerable, change the permissions on the access.log or on the error.log file with read permisions for everyone.

```bash
chmod a+x /var/log/access.log```
