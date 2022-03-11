#!/usr/bin/python
import os
import re
import sys
import asyncio
try:
    import requests
    from telethon.sync import TelegramClient,events
except:
    exit("[!] Module telethon and requests not installed")

C = "\x1b[1;96m"
P = "\x1b[1;97m"
U = "\x1b[0;94m"
B = "\x1b[1;90m"
K = "\x1b[1;93m"
H = "\x1b[1;92m"
M = "\x1b[1;91m"

api_id = "12369677"
channel = "@Ethereumclickbot"
api_hash = "e7b43b8112de50babed6baa42b88d87d"
ses = requests.Session()
ses.headers.update({"user-agent":"Mozilla/5.0 (Linux; Android 8.1.0; CPH1853) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.131 Mobile Safari/537.36"})

async def countdown(second):
    while second:
        mins,secs = divmod(second,60)
        timer = "  \x1b[1;93m▶ \x1b[1;97mLimit \x1b[1;97m⟨\x1b[1;97m{:02d}:{:02d}\x1b[1;97m⟩ \x1b[1;97m".format(mins,secs)
        print(timer,end="\r")
        await asyncio.sleep(1)
        second -= 1

async def clickvisit(api,hash,channel):
    async with TelegramClient("sesi",api,hash) as login:
          account = await login.get_me()
          await asyncio.sleep(2.1);os.system('cls' if os.name=='nt' else 'clear');print(f"\n        {B}[  {P}by{M}: {P}kingtebe {B}| {P}yt{M}: {P}Bitboy Channel  {B}]\n    {B} [      {P}Tools {M}: {P}ETH Clik Bot {H}({P}Telegram{H})      {B}]\n  {U}───────────────────────────────────────────────────\n                    {P}Version {M}: {K}1.0\n"+ f"\n  {H}▶ {P}Login as @"+ str(account.username) +f" {B}[ {P}+"+ str(account.phone).replace(account.phone[5:13],"xxxxxxxx")+ f" {B}]"+ f"\n  {H}▶ {P}Support me https://t.me/Captain_bulls\n")
          while True:
              bot = await login.get_entity(channel)
              await login.send_message(entity=bot,message="🖥 Visit sites")
              visit = await login.get_messages(channel,limit=2)
              try:
                  url = visit[1].reply_markup.rows[0].buttons[0].url
              except AttributeError:
                  continue
              req = ses.get(url,allow_redirects=True).text
              await visit[1].click(2)
              await asyncio.sleep(3)
              message = await login.get_messages(channel,limit=2)
              if message[0].message.find("Please stay on the site") == 0:
                 await countdown(int(30))
              else:
                 print(f"  {H}▶ {P}"+ str(message[1].message))
                 await login.send_message(entity=bot,message="💰 Balance");await asyncio.sleep(3)
                 pesan = await login.get_messages(channel,limit=2)
                 other = re.search("\sbalance\:([^>]+)",pesan[0].message).group(1)
                 print(f"  {H}▶ {P}Balance now {B}[{K}"+ str(other)+ f" {B}]")

asyncio.run(clickvisit(api_id,api_hash,channel))

