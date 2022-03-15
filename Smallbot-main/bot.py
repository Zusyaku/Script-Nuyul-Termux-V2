#!/usr/bin/python
# create by kingtebe
# follow my github https://github.com/Musk-ID
import os
import re
import sys
import asyncio
try:
    from datetime import datetime
    from telethon.sync import TelegramClient,events
except ImportError:
    exit("[!] Module telethon not installed")

C = "\x1b[1;96m"
P = "\x1b[1;97m"
U = "\x1b[0;94m"
B = "\x1b[1;90m"
K = "\x1b[1;93m"
H = "\x1b[1;92m"
M = "\x1b[1;91m"

API_ID = "12369677"
BOT = "@SmallFaucetTrxFP_bot"
API_HASH = "e7b43b8112de50babed6baa42b88d87d"
if not os.path.exists("sesi"):
   os.makedirs("sesi")

login = TelegramClient("sesi/",API_ID,API_HASH)
login.start()
login.connect()
me = login.get_me()

async def countdown(second):
    while second:
        mins,secs = divmod(second,60)
        timer = "  \x1b[1;92m▶ \x1b[1;97mLimit \x1b[1;92m⟨\x1b[1;97m{:02d}:{:02d}\x1b[1;92m⟩ \x1b[1;97m".format(mins,secs)
        print(timer,end="\r")
        await asyncio.sleep(1)
        second -= 1

async def get_claim(message):
    bot = await login.get_entity(BOT)
    while True:
        await login.send_message(bot,message="💙 Claim Faucet Trx")
        await asyncio.sleep(3)
        msg = await login.get_messages(BOT,limit=2)
        if msg[0].message.find("❌ Email Not set") == 0:
           exit(f'  {B}[{K}{datetime.now().strftime("%H:%M:%S")}{B}] {P}Email not set\n')
        await msg[0].click(0)
        await asyncio.sleep(2)
        pesan = await login.get_messages(BOT,limit=2)
        if "satoshi was sent" in pesan[0].message:
            trx = re.search("✅\s([0-9]+)\ssatoshi",pesan[0].message).group(1)
            print(f'  {B}[{K}{datetime.now().strftime("%H:%M:%S")}{B}] {P}' + str(trx) + str(message))
            await asyncio.sleep(3)
            await login.send_message(bot,message="😈 Unlimited Faucet")
            await asyncio.sleep(3)
            info = await login.get_messages(BOT,limit=2)
            try:
                trx1 = re.search("✅\s([0-9]+)\ssatoshi",info[0].message).group(1)
                print(f'  {B}[{K}{datetime.now().strftime("%H:%M:%S")}{B}] {P}' + str(trx1) + str(message))
            except AttributeError:
                break
            await countdown(int(60*5))
        else:
            await login.disconnect()
            exit(f'  {B}[{K}{datetime.now().strftime("%H:%M:%S")}{B}] {P}Limit 5 minutes please wait\n')

async def setmail():
    bot = await login.get_entity(BOT)
    await login.send_message(bot,message="💼 Set Email")
    await asyncio.sleep(3)
    chat = await login.get_messages(BOT,limit=2)
    await chat[0].click(0)
    await asyncio.sleep(2)
    news = await login.get_messages(BOT,limit=2)
    email = input(f'  {B}[{K}{datetime.now().strftime("%H:%M:%S")}{B}] {P}Email faucetpay {M}: {P}')
    await login.send_message(bot,message=email)
    await asyncio.sleep(3)
    msg = await login.get_messages(bot,limit=2)
    print(f'  {B}[{K}{datetime.now().strftime("%H:%M:%S")}{B}] {P}'+ str(msg[0].message).replace("🔍Your Faucetpay.io Address Set To","Faucetpay.io Address Set To") + "\n")
    await login.disconnect()

async def mainbot():
    os.system("cls" if os.name == "nt" else "clear")
    print(f"\n        {B}[  {P}by{M}: {P}kingtebe {B}| {P}yt{M}: {P}Bitboy Channel  {B}]\n    {B} [      {P}Tools {M}: {P}Small {B}- {P}Faucetpay {H}({P}TRX{H})      {B}]\n  {U}───────────────────────────────────────────────────\n                    {P}Version {M}: {K}1.0\n\n  {H}▶ {P}Login as @"+ str(me.username)+ f" {B}[ {P}+"+ str(me.phone).replace(me.phone[5:13],"xxxxxxxx")+ f" {B}]\n  {H}▶ {P}Follow my github https://github.com/Musk-ID\n\n\t{H}[{P}1{H}] {P}Claim TRX\n\t{H}[{P}2{H}] {P}Set email\n\t{H}[{P}3{H}] {P}Exit")
    choose = input(f"  {H}▶ {P}")
    print("")
    if choose in ("1","01"):
       _ = " satoshi was sent to you on FaucetPay.io"
       await get_claim(_)
    elif choose in ("2","02"):
         await setmail()
    elif choose in ("3","03"):
         exit(f'\n  {B}[{K}{datetime.now().strftime("%H:%M:%S")}{B}] {P}Byeee !!\n')

with login:
     login.loop.run_until_complete(mainbot())
