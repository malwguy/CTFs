This is an apache web application with a built-in LFI. 

This is meant as an exercise for log poisoning

In order to make it vulnerable, change the ownership of the /var/log/apache2 directory to www-data (otherwise you won't be able to include any file under /apache2/ with the LFI due to lack of ownership)

```bash
chown -R www-data:www-data /var/log/apache2
