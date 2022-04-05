from telethon import TelegramClient, events, utils
from telethon.tl.functions.messages import GetAllStickersRequest, GetStickerSetRequest
from telethon.tl.types import InputStickerSetID
from time import sleep
from datetime import datetime
import requests, os, sys, re, random, json,asyncio

os.system('cls' if os.name == 'nt' else 'clear')
api_id  =800812
api_hash='db55ad67a98df35667ca788b97f771f5'

if len(sys.argv) == 2:
    nomor = sys.argv[1]
else:
    exit(f"example\npython {sys.argv[0]} +6285246104478")
if not os.path.isdir("session"):
    os.mkdir("session")
client = TelegramClient("session/"+nomor,api_id,api_hash).start(nomor)
os.system('cls' if os.name == 'nt' else 'clear')
BANER='''
           __                __  __                   __     
          |  \              |  \|  \                 |  \    
  _______  \$$ ______ ____   \$$| $$____    ______  _| $$_   
 /       \|  \|      \    \ |  \| $$    \  /      \|   $$ \  
|  $$$$$$$| $$| $$$$$$\$$$$\| $$| $$$$$$$\|  $$$$$$\\$$$$$$  
 \$$    \ | $$| $$ | $$ | $$| $$| $$  | $$| $$  | $$ | $$ __ 
 _\$$$$$$\| $$| $$ | $$ | $$| $$| $$__/ $$| $$__/ $$ | $$|  \
|       $$| $$| $$ | $$ | $$| $$| $$    $$ \$$    $$  \$$  $$
 \$$$$$$$  \$$ \$$  \$$  \$$ \$$ \$$$$$$$   \$$$$$$    \$$$$ 
'''
print(f"\033[1;36m{BANER}\n\033[1;31mAuthor by : \033[1;36m@kakatoji\033[0m")
print(f"~"*60)
async def simi(text):
    try:
        r = requests.get("https://api.simsimi.net/v2/?text={}&lc=id".format(text)).json()["success"]
        if r != None and r != 'Aku tidak mengerti apa yang kamu katakan.Tolong ajari aku.':
            return r
        else:
            return "siap bos ku"
    except:
        pass
    
@client.on(events.NewMessage)
async def my_event(event):
    try:
        dil = await event.get_chat()
        chat = await event.client.get_entity(event.chat_id)
        sender = await event.get_sender()
        if not chat.bot:
            mess = await simi(event.message.message)
            async with client.action(event.chat_id,'typing'):
                await asyncio.sleep(3)
                await event.respond(mess)
            if sender.last_name != None:
                last = sender.last_name
            else:
                last = ''
            print(f"\033[1;32mkamu dapat pesan dari => \033[1;36m",sender.first_name, last,f"\033[0m")
    except:
        pass
@client.on(events.NewMessage)
async def my_run(event):
    uname = '@'+(await client.get_me()).username
    try:
        if event.message.media == None and event.message.mentioned == True and uname in event.message.message:
            gass = await simi(event.message.message)
            async with client.action(event.chat_id, 'typing'):
                await asyncio.sleep(random.randint(10,50))
                await event.respond(gass)
                print(f"\033[1;32msuccess respon tag from \033[1;36m{event.message.from_id.user_id} \033[1;32min group_id\033[1;31m {event.message.peer_id.channel_id}\033[0m")
        else:
            mse = await simi(event.message.message)
            async with client.action(event.chat_id,'typing'):
                await asyncio.sleep(5)
                await event.reply(mse)
                print(f"\033[1;32mreply to \033[1;36m{event.message.from_id.user_id} \033[1;32min group_id \033[1;31m{event.message.peer_id.channel_id}\033[0m")
    except:
        pass
    
async def main():
    await client.run_until_disconnected()
client.loop.run_until_complete(main())