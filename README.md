# no-ip-batch
Batch Script to update No-IP Hostname

## No-IP Update with PHP and Crontab
0 * * * *  curl "YOUR_HOST_URL/updater.php" > /dev/null 2>&1
