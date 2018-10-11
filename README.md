# no-ip-batch
Batch Script to update No-IP Hostname

## Update no-ip ip every one hour
0 * * * *  curl "YOUR_HOST_URL/updater.php" > /dev/null 2>&1
