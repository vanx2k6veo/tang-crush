home='/data/data/com.termux/files/'
printf '\n\033[1;32m Tiến Hành Cài Dữ Liệu\n\n'
termux-setup-storage
apt update
apt upgrade
printf '\n\033[1;32m Tiến Hành Cài Python\n\n'
pkg install php
pip install --upgrade pip
curl -s https://raw.githubusercontent.com/vanx2k6veo/van-van/main/gop -o $home/usr/bin/vanx2k6veo
chmod 777 $home/usr/bin/vanx2k6veo

printf '\n\033[1;32m Gõ \033[1;33mvanx2k6veo \033[1;32mĐể Vào Tool <3\n\n'
