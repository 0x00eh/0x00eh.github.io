
Create by Theblackthreat
<br/>
CTF-Bandit

<!---
bandit0 : bandit0
bandit1 : boJ9jbbUNNfktd78OOpsqOltutMc3MY1
bandit2 : CV1DtqXWVFXTvM2F0k09SHz0YwRINYA9
bandit3 : UmHadQclWmgdLOKQ3YNgjWxGoRMb5luK
bandit4 : pIwrPrtPN36QITSp3EQaw936yaFoFgAB
bandit5 : koReBOKuIDDepwhWk7jZC0RTdopnAYKh
bandit6 : DXjZPULLxYr17uwoI01bNLQbtFemEgo7
bandit7 : HKBPTKQnIay4Fw76bEy8PVxKEDQRKTzs
bandit8 : cvX2JJa4CFALtqS87jk27qwqGhBM9plV
bandit9 : UsvVyFSfZZWbi6wgC7dAFyFuR6jQQUhR
bandit10: truKLdjsbJ5g7yyJ2X2R0o3a5HQJFuLk
bandit11: IFukwKGsFW8MOq3IRFqrxE1hxTNEbUPR
bandit12: 5Te8Y4drgCRfCx8ugdwuEX8KFC6k2EUu
bandit13: 8ZjyCRiBWFYkneahHwxCv3wb2a1ORpYL
bandit14: 4wcYUJFw0k0XLShlDzztnTBHiqxU3b3e
bandit15: BfMYroe26WYalil77FoDi9qh59eK5xNr
bandit16: cluFn7wTiGryunymYOu4RcffSxQluehd
bandit17: use private key in 16.
bandit18: kfBf3eYk5BPBRzwjqutbbfE887SVc5Yd
bandit19: IueksS7Ubh8G3DCwVzrTd8rAVOwq3M5x
bandit20: GbKksEFF4yrVs6il55v6gwY5aVje5f0j

--->

<img align="center" src="9.png">
```
--------------------------

┌──(theblackthreat㉿theblackthreat)-[~]
└─$ ssh -p 2220 bandit0@bandit.labs.overthewire.org
This is a OverTheWire game server. More information on http://www.overthewire.org/wargames

bandit0@bandit.labs.overthewire.org's password: 
Linux bandit.otw.local 5.4.8 x86_64 GNU/Linux

      ,----..            ,----,          .---.
     /   /   \         ,/   .`|         /. ./|
    /   .     :      ,`   .'  :     .--'.  ' ;
   .   /   ;.  \   ;    ;     /    /__./ \ : |
  .   ;   /  ` ; .'___,/    ,' .--'.  '   \' .
  ;   |  ; \ ; | |    :     | /___/ \ |    ' '
  |   :  | ; | ' ;    |.';  ; ;   \  \;      :
  .   |  ' ' ' : `----'  |  |  \   ;  `      |
  '   ;  \; /  |     '   :  ;   .   \    .\  ;
   \   \  ',  /      |   |  '    \   \   ' \ |
    ;   :    /       '   :  |     :   '  |--"
     \   \ .'        ;   |.'       \   \ ;
  www. `---` ver     '---' he       '---" ire.org


Welcome to OverTheWire!

---[SNIP]---

--[ More information ]--

  For more information regarding individual wargames, visit
  http://www.overthewire.org/wargames/

  For support, questions or comments, contact us through IRC on
  irc.overthewire.org #wargames.

  Enjoy your stay!

bandit0@bandit:~$ ls
readme
bandit0@bandit:~$ cat readme
boJ9jbbUNNfktd78OOpsqOltutMc3MY1
bandit0@bandit:~$ exit
logout
Connection to bandit.labs.overthewire.org closed.
                                                                                                                                   
┌──(theblackthreat㉿theblackthreat)-[~]
└─$ ssh -p 2220 bandit1@bandit.labs.overthewire.org
This is a OverTheWire game server. More information on http://www.overthewire.org/wargames

bandit1@bandit.labs.overthewire.org's password: 
Linux bandit.otw.local 5.4.8 x86_64 GNU/Linux

      ,----..            ,----,          .---.
     /   /   \         ,/   .`|         /. ./|
    /   .     :      ,`   .'  :     .--'.  ' ;
   .   /   ;.  \   ;    ;     /    /__./ \ : |
  .   ;   /  ` ; .'___,/    ,' .--'.  '   \' .
  ;   |  ; \ ; | |    :     | /___/ \ |    ' '
  |   :  | ; | ' ;    |.';  ; ;   \  \;      :
  .   |  ' ' ' : `----'  |  |  \   ;  `      |
  '   ;  \; /  |     '   :  ;   .   \    .\  ;
   \   \  ',  /      |   |  '    \   \   ' \ |
    ;   :    /       '   :  |     :   '  |--"
     \   \ .'        ;   |.'       \   \ ;
  www. `---` ver     '---' he       '---" ire.org


Welcome to OverTheWire!

If you find any problems, please report them to Steven or morla on
irc.overthewire.org.

--[ Playing the games ]--

  This machine might hold several wargames.
  If you are playing "somegame", then:

    * USERNAMES are somegame0, somegame1, ...
    * Most LEVELS are stored in /somegame/.
    * PASSWORDS for each level are stored in /etc/somegame_pass/.

  Write-access to homedirectories is disabled. It is advised to create a
  working directory with a hard-to-guess name in /tmp/.  You can use the
  command "mktemp -d" in order to generate a random and hard to guess
  directory in /tmp/.  Read-access to both /tmp/ and /proc/ is disabled
  so that users can not snoop on eachother. Files and directories with
  easily guessable or short names will be periodically deleted!

  Please play nice:

    * don't leave orphan processes running
    * don't leave exploit-files laying around
    * don't annoy other players
    * don't post passwords or spoilers
    * again, DONT POST SPOILERS!
      This includes writeups of your solution on your blog or website!

--[ Tips ]--

  This machine has a 64bit processor and many security-features enabled
  by default, although ASLR has been switched off.  The following
  compiler flags might be interesting:

    -m32                    compile for 32bit
    -fno-stack-protector    disable ProPolice
    -Wl,-z,norelro          disable relro

  In addition, the execstack tool can be used to flag the stack as
  executable on ELF binaries.

  Finally, network-access is limited for most levels by a local
  firewall.

--[ Tools ]--

 For your convenience we have installed a few usefull tools which you can find
 in the following locations:

    * gef (https://github.com/hugsy/gef) in /usr/local/gef/
    * pwndbg (https://github.com/pwndbg/pwndbg) in /usr/local/pwndbg/
    * peda (https://github.com/longld/peda.git) in /usr/local/peda/
    * gdbinit (https://github.com/gdbinit/Gdbinit) in /usr/local/gdbinit/
    * pwntools (https://github.com/Gallopsled/pwntools)
    * radare2 (http://www.radare.org/)
    * checksec.sh (http://www.trapkit.de/tools/checksec.html) in /usr/local/bin/checksec.sh

--[ More information ]--

  For more information regarding individual wargames, visit
  http://www.overthewire.org/wargames/

  For support, questions or comments, contact us through IRC on
  irc.overthewire.org #wargames.

  Enjoy your stay!

bandit1@bandit:~$ ls
-
bandit1@bandit:~$ cat ./-
CV1DtqXWVFXTvM2F0k09SHz0YwRINYA9
bandit1@bandit:~$ exit
logout
Connection to bandit.labs.overthewire.org closed.
                                                                                                                                   
┌──(theblackthreat㉿theblackthreat)-[~]
└─$ ssh -p 2220 bandit2@bandit.labs.overthewire.org
This is a OverTheWire game server. More information on http://www.overthewire.org/wargames

bandit2@bandit.labs.overthewire.org's password: 
Linux bandit.otw.local 5.4.8 x86_64 GNU/Linux

      ,----..            ,----,          .---.
     /   /   \         ,/   .`|         /. ./|
    /   .     :      ,`   .'  :     .--'.  ' ;
   .   /   ;.  \   ;    ;     /    /__./ \ : |
  .   ;   /  ` ; .'___,/    ,' .--'.  '   \' .
  ;   |  ; \ ; | |    :     | /___/ \ |    ' '
  |   :  | ; | ' ;    |.';  ; ;   \  \;      :
  .   |  ' ' ' : `----'  |  |  \   ;  `      |
  '   ;  \; /  |     '   :  ;   .   \    .\  ;
   \   \  ',  /      |   |  '    \   \   ' \ |
    ;   :    /       '   :  |     :   '  |--"
     \   \ .'        ;   |.'       \   \ ;
  www. `---` ver     '---' he       '---" ire.org


Welcome to OverTheWire!

---[SNIP]---

--[ More information ]--

  For more information regarding individual wargames, visit
  http://www.overthewire.org/wargames/

  For support, questions or comments, contact us through IRC on
  irc.overthewire.org #wargames.

  Enjoy your stay!

bandit2@bandit:~$ ls
spaces in this filename
bandit2@bandit:~$ cat spaces\ in\ this\ filename
UmHadQclWmgdLOKQ3YNgjWxGoRMb5luK
bandit2@bandit:~$ exit
logout
Connection to bandit.labs.overthewire.org closed.
                                                                                                                                   
┌──(theblackthreat㉿theblackthreat)-[~]
└─$ ssh -p 2220 bandit3@bandit.labs.overthewire.org
This is a OverTheWire game server. More information on http://www.overthewire.org/wargames

bandit3@bandit.labs.overthewire.org's password: 
Linux bandit.otw.local 5.4.8 x86_64 GNU/Linux

      ,----..            ,----,          .---.
     /   /   \         ,/   .`|         /. ./|
    /   .     :      ,`   .'  :     .--'.  ' ;
   .   /   ;.  \   ;    ;     /    /__./ \ : |
  .   ;   /  ` ; .'___,/    ,' .--'.  '   \' .
  ;   |  ; \ ; | |    :     | /___/ \ |    ' '
  |   :  | ; | ' ;    |.';  ; ;   \  \;      :
  .   |  ' ' ' : `----'  |  |  \   ;  `      |
  '   ;  \; /  |     '   :  ;   .   \    .\  ;
   \   \  ',  /      |   |  '    \   \   ' \ |
    ;   :    /       '   :  |     :   '  |--"
     \   \ .'        ;   |.'       \   \ ;
  www. `---` ver     '---' he       '---" ire.org


Welcome to OverTheWire!

---[SNIP]---

--[ More information ]--

  For more information regarding individual wargames, visit
  http://www.overthewire.org/wargames/

  For support, questions or comments, contact us through IRC on
  irc.overthewire.org #wargames.

  Enjoy your stay!

bandit3@bandit:~$ ls
inhere
bandit3@bandit:~$ cd inhere/
bandit3@bandit:~/inhere$ ls
bandit3@bandit:~/inhere$ ls -al
total 12
drwxr-xr-x 2 root    root    4096 May  7  2020 .
drwxr-xr-x 3 root    root    4096 May  7  2020 ..
-rw-r----- 1 bandit4 bandit3   33 May  7  2020 .hidden
bandit3@bandit:~/inhere$ cat .hidden 
pIwrPrtPN36QITSp3EQaw936yaFoFgAB
bandit3@bandit:~/inhere$ exit
logout
Connection to bandit.labs.overthewire.org closed.
                                                                                                                                   
┌──(theblackthreat㉿theblackthreat)-[~]
└─$ ssh -p 2220 bandit4@bandit.labs.overthewire.org
This is a OverTheWire game server. More information on http://www.overthewire.org/wargames

bandit4@bandit.labs.overthewire.org's password: 
Linux bandit.otw.local 5.4.8 x86_64 GNU/Linux

      ,----..            ,----,          .---.
     /   /   \         ,/   .`|         /. ./|
    /   .     :      ,`   .'  :     .--'.  ' ;
   .   /   ;.  \   ;    ;     /    /__./ \ : |
  .   ;   /  ` ; .'___,/    ,' .--'.  '   \' .
  ;   |  ; \ ; | |    :     | /___/ \ |    ' '
  |   :  | ; | ' ;    |.';  ; ;   \  \;      :
  .   |  ' ' ' : `----'  |  |  \   ;  `      |
  '   ;  \; /  |     '   :  ;   .   \    .\  ;
   \   \  ',  /      |   |  '    \   \   ' \ |
    ;   :    /       '   :  |     :   '  |--"
     \   \ .'        ;   |.'       \   \ ;
  www. `---` ver     '---' he       '---" ire.org


Welcome to OverTheWire!

---[SNIP]---

--[ More information ]--

  For more information regarding individual wargames, visit
  http://www.overthewire.org/wargames/

  For support, questions or comments, contact us through IRC on
  irc.overthewire.org #wargames.

  Enjoy your stay!

bandit4@bandit:~$ ls
inhere
bandit4@bandit:~$ cd inhere/
bandit4@bandit:~/inhere$ ls
-file00  -file01  -file02  -file03  -file04  -file05  -file06  -file07  -file08  -file09
bandit4@bandit:~/inhere$ ls -al
total 48
drwxr-xr-x 2 root    root    4096 May  7  2020 .
drwxr-xr-x 3 root    root    4096 May  7  2020 ..
-rw-r----- 1 bandit5 bandit4   33 May  7  2020 -file00
-rw-r----- 1 bandit5 bandit4   33 May  7  2020 -file01
-rw-r----- 1 bandit5 bandit4   33 May  7  2020 -file02
-rw-r----- 1 bandit5 bandit4   33 May  7  2020 -file03
-rw-r----- 1 bandit5 bandit4   33 May  7  2020 -file04
-rw-r----- 1 bandit5 bandit4   33 May  7  2020 -file05
-rw-r----- 1 bandit5 bandit4   33 May  7  2020 -file06
-rw-r----- 1 bandit5 bandit4   33 May  7  2020 -file07
-rw-r----- 1 bandit5 bandit4   33 May  7  2020 -file08
-rw-r----- 1 bandit5 bandit4   33 May  7  2020 -file09
bandit4@bandit:~/inhere$ cat ./-file07
koReBOKuIDDepwhWk7jZC0RTdopnAYKh
bandit4@bandit:~/inhere$ exit
logout
Connection to bandit.labs.overthewire.org closed.
                                                                                                                                   
┌──(theblackthreat㉿theblackthreat)-[~]
└─$ ssh -p 2220 bandit5@bandit.labs.overthewire.org
This is a OverTheWire game server. More information on http://www.overthewire.org/wargames

bandit5@bandit.labs.overthewire.org's password: 
Linux bandit.otw.local 5.4.8 x86_64 GNU/Linux

      ,----..            ,----,          .---.
     /   /   \         ,/   .`|         /. ./|
    /   .     :      ,`   .'  :     .--'.  ' ;
   .   /   ;.  \   ;    ;     /    /__./ \ : |
  .   ;   /  ` ; .'___,/    ,' .--'.  '   \' .
  ;   |  ; \ ; | |    :     | /___/ \ |    ' '
  |   :  | ; | ' ;    |.';  ; ;   \  \;      :
  .   |  ' ' ' : `----'  |  |  \   ;  `      |
  '   ;  \; /  |     '   :  ;   .   \    .\  ;
   \   \  ',  /      |   |  '    \   \   ' \ |
    ;   :    /       '   :  |     :   '  |--"
     \   \ .'        ;   |.'       \   \ ;
  www. `---` ver     '---' he       '---" ire.org


Welcome to OverTheWire!



--[ More information ]--

  For more information regarding individual wargames, visit
  http://www.overthewire.org/wargames/

  For support, questions or comments, contact us through IRC on
  irc.overthewire.org #wargames.

  Enjoy your stay!

bandit5@bandit:~$ ls
inhere
bandit5@bandit:~$ cd inhere/
bandit5@bandit:~/inhere$ ls
maybehere00  maybehere02  maybehere04  maybehere06  maybehere08  maybehere10  maybehere12  maybehere14  maybehere16  maybehere18
maybehere01  maybehere03  maybehere05  maybehere07  maybehere09  maybehere11  maybehere13  maybehere15  maybehere17  maybehere19
bandit5@bandit:~/inhere$ ls -al
total 88
drwxr-x--- 22 root bandit5 4096 May  7  2020 .
drwxr-xr-x  3 root root    4096 May  7  2020 ..
drwxr-x---  2 root bandit5 4096 May  7  2020 maybehere00
drwxr-x---  2 root bandit5 4096 May  7  2020 maybehere01
drwxr-x---  2 root bandit5 4096 May  7  2020 maybehere02
drwxr-x---  2 root bandit5 4096 May  7  2020 maybehere03
drwxr-x---  2 root bandit5 4096 May  7  2020 maybehere04
drwxr-x---  2 root bandit5 4096 May  7  2020 maybehere05
drwxr-x---  2 root bandit5 4096 May  7  2020 maybehere06
drwxr-x---  2 root bandit5 4096 May  7  2020 maybehere07
drwxr-x---  2 root bandit5 4096 May  7  2020 maybehere08
drwxr-x---  2 root bandit5 4096 May  7  2020 maybehere09
drwxr-x---  2 root bandit5 4096 May  7  2020 maybehere10
drwxr-x---  2 root bandit5 4096 May  7  2020 maybehere11
drwxr-x---  2 root bandit5 4096 May  7  2020 maybehere12
drwxr-x---  2 root bandit5 4096 May  7  2020 maybehere13
drwxr-x---  2 root bandit5 4096 May  7  2020 maybehere14
drwxr-x---  2 root bandit5 4096 May  7  2020 maybehere15
drwxr-x---  2 root bandit5 4096 May  7  2020 maybehere16
drwxr-x---  2 root bandit5 4096 May  7  2020 maybehere17
drwxr-x---  2 root bandit5 4096 May  7  2020 maybehere18
drwxr-x---  2 root bandit5 4096 May  7  2020 maybehere19
bandit5@bandit:~/inhere$ find ./ -type f -size 1033c ! -executable ./maybehere00/.file1
find: paths must precede expression: ./maybehere00/.file1
Try 'find --help' for more information.
bandit5@bandit:~/inhere$ find ./ -type f -size 1033c ! -executable ./maybehere00/.file2
find: paths must precede expression: ./maybehere00/.file2
Try 'find --help' for more information.
bandit5@bandit:~/inhere$ find ./ -type f -size 1033c | -executable ./maybehere00/.file2
-bash: -executable: command not found
bandit5@bandit:~/inhere$ find ./ -type f -size 1033c ! -executable
./maybehere07/.file2
bandit5@bandit:~/inhere$ find / -size 1033c 
find: ‘/root’: Permission denied
find: ‘/home/bandit28-git’: Permission denied
find: ‘/home/bandit30-git’: Permission denied

---[SNIP]---

find: ‘/var/lib/polkit-1’: Permission denied
find: ‘/var/log’: Permission denied
find: ‘/var/cache/apt/archives/partial’: Permission denied
find: ‘/var/cache/ldconfig’: Permission denied
bandit5@bandit:~/inhere$ find ./ -type f -size 1033c ! -executable ./maybehere07/.file2
find: paths must precede expression: ./maybehere07/.file2
Try 'find --help' for more information.
bandit5@bandit:~/inhere$ 
bandit5@bandit:~/inhere$ ls
maybehere00  maybehere02  maybehere04  maybehere06  maybehere08  maybehere10  maybehere12  maybehere14  maybehere16  maybehere18
maybehere01  maybehere03  maybehere05  maybehere07  maybehere09  maybehere11  maybehere13  maybehere15  maybehere17  maybehere19
bandit5@bandit:~/inhere$ cat /maybehere07/.file2
cat: /maybehere07/.file2: No such file or directory
bandit5@bandit:~/inhere$ cd maybehere07
bandit5@bandit:~/inhere/maybehere07$ ls
-file1  -file2  -file3  spaces file1  spaces file2  spaces file3
bandit5@bandit:~/inhere/maybehere07$ ls -al
total 56
drwxr-x---  2 root bandit5 4096 May  7  2020 .
drwxr-x--- 22 root bandit5 4096 May  7  2020 ..
-rwxr-x---  1 root bandit5 3663 May  7  2020 -file1
-rwxr-x---  1 root bandit5 3065 May  7  2020 .file1
-rw-r-----  1 root bandit5 2488 May  7  2020 -file2
-rw-r-----  1 root bandit5 1033 May  7  2020 .file2
-rwxr-x---  1 root bandit5 3362 May  7  2020 -file3
-rwxr-x---  1 root bandit5 1997 May  7  2020 .file3
-rwxr-x---  1 root bandit5 4130 May  7  2020 spaces file1
-rw-r-----  1 root bandit5 9064 May  7  2020 spaces file2
-rwxr-x---  1 root bandit5 1022 May  7  2020 spaces file3
bandit5@bandit:~/inhere/maybehere07$ cat .file2
DXjZPULLxYr17uwoI01bNLQbtFemEgo7
logout
Connection to bandit.labs.overthewire.org closed.
                                                                                                                                   
┌──(theblackthreat㉿theblackthreat)-[~]
└─$ ssh -p 2220 bandit6@bandit.labs.overthewire.org
This is a OverTheWire game server. More information on http://www.overthewire.org/wargames

bandit6@bandit.labs.overthewire.org's password: 
Linux bandit.otw.local 5.4.8 x86_64 GNU/Linux

      ,----..            ,----,          .---.
     /   /   \         ,/   .`|         /. ./|
    /   .     :      ,`   .'  :     .--'.  ' ;
   .   /   ;.  \   ;    ;     /    /__./ \ : |
  .   ;   /  ` ; .'___,/    ,' .--'.  '   \' .
  ;   |  ; \ ; | |    :     | /___/ \ |    ' '
  |   :  | ; | ' ;    |.';  ; ;   \  \;      :
  .   |  ' ' ' : `----'  |  |  \   ;  `      |
  '   ;  \; /  |     '   :  ;   .   \    .\  ;
   \   \  ',  /      |   |  '    \   \   ' \ |
    ;   :    /       '   :  |     :   '  |--"
     \   \ .'        ;   |.'       \   \ ;
  www. `---` ver     '---' he       '---" ire.org


Welcome to OverTheWire!

---[SNIP]---

--[ More information ]--

  For more information regarding individual wargames, visit
  http://www.overthewire.org/wargames/

  For support, questions or comments, contact us through IRC on
  irc.overthewire.org #wargames.

  Enjoy your stay!

bandit6@bandit:~$ ls
bandit6@bandit:~$ ls -al
total 20
drwxr-xr-x  2 root root 4096 May  7  2020 .
drwxr-xr-x 41 root root 4096 May  7  2020 ..
-rw-r--r--  1 root root  220 May 15  2017 .bash_logout
-rw-r--r--  1 root root 3526 May 15  2017 .bashrc
-rw-r--r--  1 root root  675 May 15  2017 .profile
bandit6@bandit:~$ find / -user bandit7 -group bandit6 -size 33c -type f 1>/dev/null
find: ‘/root’: Permission denied
find: ‘/home/bandit28-git’: Permission denied

---[SNIP]---

find: ‘/var/cache/apt/archives/partial’: Permission denied
find: ‘/var/cache/ldconfig’: Permission denied
bandit6@bandit:~$ find / -user bandit7 -group bandit6 -size 33c -type f 2>/dev/null
/var/lib/dpkg/info/bandit7.password
bandit6@bandit:~$ cat /var/lib/dpkg/info/bandit7.password
HKBPTKQnIay4Fw76bEy8PVxKEDQRKTzs
bandit6@bandit:~$ exit
logout
Connection to bandit.labs.overthewire.org closed.
                                                                                                                                   
┌──(theblackthreat㉿theblackthreat)-[~]
└─$ ssh -p 2220 bandit7@bandit.labs.overthewire.org
This is a OverTheWire game server. More information on http://www.overthewire.org/wargames

bandit7@bandit.labs.overthewire.org's password: 
Linux bandit.otw.local 5.4.8 x86_64 GNU/Linux

      ,----..            ,----,          .---.
     /   /   \         ,/   .`|         /. ./|
    /   .     :      ,`   .'  :     .--'.  ' ;
   .   /   ;.  \   ;    ;     /    /__./ \ : |
  .   ;   /  ` ; .'___,/    ,' .--'.  '   \' .
  ;   |  ; \ ; | |    :     | /___/ \ |    ' '
  |   :  | ; | ' ;    |.';  ; ;   \  \;      :
  .   |  ' ' ' : `----'  |  |  \   ;  `      |
  '   ;  \; /  |     '   :  ;   .   \    .\  ;
   \   \  ',  /      |   |  '    \   \   ' \ |
    ;   :    /       '   :  |     :   '  |--"
     \   \ .'        ;   |.'       \   \ ;
  www. `---` ver     '---' he       '---" ire.org


Welcome to OverTheWire!

---[SNIP]---

--[ More information ]--

  For more information regarding individual wargames, visit
  http://www.overthewire.org/wargames/

  For support, questions or comments, contact us through IRC on
  irc.overthewire.org #wargames.

  Enjoy your stay!

bandit7@bandit:~$ ls
data.txt
bandit7@bandit:~$ cat data.txt | grep -w millionth | awk $2 '{print $2}'
cvX2JJa4CFALtqS87jk27qwqGhBM9plV
bandit7@bandit:~$ exit
logout
Connection to bandit.labs.overthewire.org closed.
                                                                                                                                   
┌──(theblackthreat㉿theblackthreat)-[~]
└─$ ssh -p 2220 bandit8@bandit.labs.overthewire.org
This is a OverTheWire game server. More information on http://www.overthewire.org/wargames

bandit8@bandit.labs.overthewire.org's password: 
Linux bandit.otw.local 5.4.8 x86_64 GNU/Linux

      ,----..            ,----,          .---.
     /   /   \         ,/   .`|         /. ./|
    /   .     :      ,`   .'  :     .--'.  ' ;
   .   /   ;.  \   ;    ;     /    /__./ \ : |
  .   ;   /  ` ; .'___,/    ,' .--'.  '   \' .
  ;   |  ; \ ; | |    :     | /___/ \ |    ' '
  |   :  | ; | ' ;    |.';  ; ;   \  \;      :
  .   |  ' ' ' : `----'  |  |  \   ;  `      |
  '   ;  \; /  |     '   :  ;   .   \    .\  ;
   \   \  ',  /      |   |  '    \   \   ' \ |
    ;   :    /       '   :  |     :   '  |--"
     \   \ .'        ;   |.'       \   \ ;
  www. `---` ver     '---' he       '---" ire.org


Welcome to OverTheWire!

I---[SNIP]---


--[ More information ]--

  For more information regarding individual wargames, visit
  http://www.overthewire.org/wargames/

  For support, questions or comments, contact us through IRC on
  irc.overthewire.org #wargames.

  Enjoy your stay!

bandit8@bandit:~$ ls
data.txt
bandit8@bandit:~$ cat data.txt | sort | uniq -c

---[SNIP]---

     10 SzwgS2ADSjP6ypOzp2bIvdqNyusRtrHj
     10 TKUtQbeYnEzzYIne7BinoBx2bHFLBXzG
     10 TThRArdF2ZEXMO47TIYkyPPLtvzzLcDf
     10 tVW9iY1Ml0uHPK4usZnN8oZXbjRt2ATY
     10 U0NYdD3wHZKpfEg9qGQOLJimAJy6qxhS
     10 UASW6CQwD6MRzftu6FAfyXBK0cVvnBLP
     10 UJiCNvDNfgb3fcCj8PjjnAXHqUM63Uyj
     10 UjsVbcqKeJqdCZQCDMkzv6A9X7hLbNE4  
      1 UsvVyFSfZZWbi6wgC7dAFyFuR6jQQUhR  //flag//
     10 UVnZvhiVQECraz5jl8U14sMVZQhjuXia
     10 V2d9umHiuPLYLIDsuHj0frOEmreCZMaA
     10 v9zaxkVAOdIOlITZY2uoCtB1fX2gmly9
     10 VkBAEWyIibVkeURZV5mowiGg6i3m7Be0
     10 w4zUWFGTUrAAh8lNkS8gH3WK2zowBEkA
     10 WBqr9xvf6mYTT5kLcTGCG6jb3ex94xWr
     10 wjNwumEX58RUQTrufHMciWz5Yx10GtTC
     10 X1JHOUkrb4KgugMXIzMWWIWvRkeZleTI
     10 XyeJdbrUJyGtdGx8cXLQST0pwu5cvpcA
     10 yo0HbSe2GM0jJNhRQLxwoPp7ayYEmRKY
     10 ySvsTwlMgnUF0n86Fgmn2TNjkSOlrV72
     10 Z9OC6DQpppreChPhwRJJV9YYTtrxNVcO
     10 zdd2ctVveROGeiS2WE3TeLZMeL5jL7iM
bandit8@bandit:~$ exit
logout
Connection to bandit.labs.overthewire.org closed.
                                                                                                                                   
┌──(theblackthreat㉿theblackthreat)-[~]
└─$ ssh -p 2220 bandit9@bandit.labs.overthewire.org
This is a OverTheWire game server. More information on http://www.overthewire.org/wargames

bandit9@bandit.labs.overthewire.org's password: 
Linux bandit.otw.local 5.4.8 x86_64 GNU/Linux

      ,----..            ,----,          .---.
     /   /   \         ,/   .`|         /. ./|
    /   .     :      ,`   .'  :     .--'.  ' ;
   .   /   ;.  \   ;    ;     /    /__./ \ : |
  .   ;   /  ` ; .'___,/    ,' .--'.  '   \' .
  ;   |  ; \ ; | |    :     | /___/ \ |    ' '
  |   :  | ; | ' ;    |.';  ; ;   \  \;      :
  .   |  ' ' ' : `----'  |  |  \   ;  `      |
  '   ;  \; /  |     '   :  ;   .   \    .\  ;
   \   \  ',  /      |   |  '    \   \   ' \ |
    ;   :    /       '   :  |     :   '  |--"
     \   \ .'        ;   |.'       \   \ ;
  www. `---` ver     '---' he       '---" ire.org


Welcome to OverTheWire!

---[SNIP]---

--[ More information ]--

  For more information regarding individual wargames, visit
  http://www.overthewire.org/wargames/

  For support, questions or comments, contact us through IRC on
  irc.overthewire.org #wargames.

  Enjoy your stay!

bandit9@bandit:~$ ls -al
total 40
drwxr-xr-x  2 root     root     4096 May  7  2020 .
drwxr-xr-x 41 root     root     4096 May  7  2020 ..
-rw-r--r--  1 root     root      220 May 15  2017 .bash_logout
-rw-r--r--  1 root     root     3526 May 15  2017 .bashrc
-rw-r-----  1 bandit10 bandit9 19379 May  7  2020 data.txt
-rw-r--r--  1 root     root      675 May 15  2017 .profile
bandit9@bandit:~$ cat data.txt
�L�lω;��ßOܛ��ǤX��NdT$��x7��@D@�o��+D��B��M֢�Z/,_��w��#�5���
                                                          Ў�e�&�-��Ϣ�6Q8��J�%fa�


---[SNIP]---

                      ���'��:��uP�ע��������g�

}<@M
N:)c
sssyJ
:T	Y
_^XF)ZB.g
;9'~
\Jg`
S/gA
g<%x
xzY<
blsN
~U^y
x@nQ
*SF=s
}1:LF
]vur
Emlld
&========== truKLdjsbJ5g7yyJ2X2R0o3a5HQJFuLk
_Gmz
\Uli,
A5RK
S'$0
<4t",
4cXO
cj13c:?
&Yra
zEwa
b2+x
z`tlR
o|8M]
.p4Hv
)z<p
S=A.H&^
#hu#
"C}Jy
0R@R_
~KW?
b#Nzx$b
RlG#t]Z}
e790
JzV1O
XEgp
2Q d
z#j\
1Qit
a'b~
bxBB\u$
8Zpc	$FOxF[
ANYwPCpk
Xk]E
bh}s
P'uP
\-A:
sCtY
Z/1x+
ej8z
P"`\XZ
1KOA
bandit9@bandit:~$ exit
logout
Connection to bandit.labs.overthewire.org closed.
                                                                                                                                   
┌──(theblackthreat㉿theblackthreat)-[~]
└─$ ssh -p 2220 bandit10@bandit.labs.overthewire.org
This is a OverTheWire game server. More information on http://www.overthewire.org/wargames

bandit10@bandit.labs.overthewire.org's password: 
Linux bandit.otw.local 5.4.8 x86_64 GNU/Linux

      ,----..            ,----,          .---.
     /   /   \         ,/   .`|         /. ./|
    /   .     :      ,`   .'  :     .--'.  ' ;
   .   /   ;.  \   ;    ;     /    /__./ \ : |
  .   ;   /  ` ; .'___,/    ,' .--'.  '   \' .
  ;   |  ; \ ; | |    :     | /___/ \ |    ' '
  |   :  | ; | ' ;    |.';  ; ;   \  \;      :
  .   |  ' ' ' : `----'  |  |  \   ;  `      |
  '   ;  \; /  |     '   :  ;   .   \    .\  ;
   \   \  ',  /      |   |  '    \   \   ' \ |
    ;   :    /       '   :  |     :   '  |--"
     \   \ .'        ;   |.'       \   \ ;
  www. `---` ver     '---' he       '---" ire.org


Welcome to OverTheWire!

---[SNIP]---

--[ More information ]--

  For more information regarding individual wargames, visit
  http://www.overthewire.org/wargames/

  For support, questions or comments, contact us through IRC on
  irc.overthewire.org #wargames.

  Enjoy your stay!

bandit10@bandit:~$ ls
data.txt
bandit10@bandit:~$ cat data.txt 
VGhlIHBhc3N3b3JkIGlzIElGdWt3S0dzRlc4TU9xM0lSRnFyeEUxaHhUTkViVVBSCg==
bandit10@bandit:~$ bash64 -d data.txt 
-bash: bash64: command not found
bandit10@bandit:~$ base64 -d data.txt 
The password is IFukwKGsFW8MOq3IRFqrxE1hxTNEbUPR
bandit10@bandit:~$ exit
logout
Connection to bandit.labs.overthewire.org closed.
                                                                                                                                   
┌──(theblackthreat㉿theblackthreat)-[~]
└─$ ssh -p 2220 bandit11@bandit.labs.overthewire.org
This is a OverTheWire game server. More information on http://www.overthewire.org/wargames

bandit11@bandit.labs.overthewire.org's password: 
Linux bandit.otw.local 5.4.8 x86_64 GNU/Linux

      ,----..            ,----,          .---.
     /   /   \         ,/   .`|         /. ./|
    /   .     :      ,`   .'  :     .--'.  ' ;
   .   /   ;.  \   ;    ;     /    /__./ \ : |
  .   ;   /  ` ; .'___,/    ,' .--'.  '   \' .
  ;   |  ; \ ; | |    :     | /___/ \ |    ' '
  |   :  | ; | ' ;    |.';  ; ;   \  \;      :
  .   |  ' ' ' : `----'  |  |  \   ;  `      |
  '   ;  \; /  |     '   :  ;   .   \    .\  ;
   \   \  ',  /      |   |  '    \   \   ' \ |
    ;   :    /       '   :  |     :   '  |--"
     \   \ .'        ;   |.'       \   \ ;
  www. `---` ver     '---' he       '---" ire.org


Welcome to OverTheWire!

---[SNIP]---


--[ More information ]--

  For more information regarding individual wargames, visit
  http://www.overthewire.org/wargames/

  For support, questions or comments, contact us through IRC on
  irc.overthewire.org #wargames.

  Enjoy your stay!

bandit11@bandit:~$ use rot13 to solve this challenge on browser. [https:// rot13.com]
-bash: use: command not found
bandit11@bandit:~$ exit
logout
Connection to bandit.labs.overthewire.org closed.
                                                                                                                                   
┌──(theblackthreat㉿theblackthreat)-[~]
└─$ ssh -p 2220 bandit12@bandit.labs.overthewire.org                                                                         127 ⨯
This is a OverTheWire game server. More information on http://www.overthewire.org/wargames

bandit12@bandit.labs.overthewire.org's password: 
Linux bandit.otw.local 5.4.8 x86_64 GNU/Linux

      ,----..            ,----,          .---.
     /   /   \         ,/   .`|         /. ./|
    /   .     :      ,`   .'  :     .--'.  ' ;
   .   /   ;.  \   ;    ;     /    /__./ \ : |
  .   ;   /  ` ; .'___,/    ,' .--'.  '   \' .
  ;   |  ; \ ; | |    :     | /___/ \ |    ' '
  |   :  | ; | ' ;    |.';  ; ;   \  \;      :
  .   |  ' ' ' : `----'  |  |  \   ;  `      |
  '   ;  \; /  |     '   :  ;   .   \    .\  ;
   \   \  ',  /      |   |  '    \   \   ' \ |
    ;   :    /       '   :  |     :   '  |--"
     \   \ .'        ;   |.'       \   \ ;
  www. `---` ver     '---' he       '---" ire.org


Welcome to OverTheWire!

---[SNIP]---


--[ More information ]--

  For more information regarding individual wargames, visit
  http://www.overthewire.org/wargames/

  For support, questions or comments, contact us through IRC on
  irc.overthewire.org #wargames.

  Enjoy your stay!

bandit12@bandit:~$ ls
data.txt
bandit12@bandit:~$ mkdir /tmp/challenge
bandit12@bandit:~$ cp data.txt /tmp/challenge
bandit12@bandit:~$ cd /tmp/challenge
bandit12@bandit:/tmp/challenge$ ls
data.txt
bandit12@bandit:/tmp/challenge$ file data.txt
data.txt: ASCII text
bandit12@bandit:/tmp/challenge$ cat data.txt
00000000: 1f8b 0808 0650 b45e 0203 6461 7461 322e  .....P.^..data2.
00000010: 6269 6e00 013d 02c2 fd42 5a68 3931 4159  bin..=...BZh91AY
00000020: 2653 598e 4f1c c800 001e 7fff fbf9 7fda  &SY.O...........
00000030: 9e7f 4f76 9fcf fe7d 3fff f67d abde 5e9f  ..Ov...}?..}..^.
00000040: f3fe 9fbf f6f1 feee bfdf a3ff b001 3b1b  ..............;.
00000050: 5481 a1a0 1ea0 1a34 d0d0 001a 68d3 4683  T......4....h.F.

---[SNIP]---


bandit12@bandit:/tmp/challenge$ cat data.txt | xxd -r > data
bandit12@bandit:/tmp/challenge$ ls
data  data.txt
bandit12@bandit:/tmp/challenge$ file data
data: gzip compressed data, was "data2.bin", last modified: Thu May  7 18:14:30 2020, max compression, from Unix
bandit12@bandit:/tmp/challenge$ mv data data2.gz
bandit12@bandit:/tmp/challenge$ ls
data2.gz  data.txt
bandit12@bandit:/tmp/challenge$ gzip -d data2.gz
bandit12@bandit:/tmp/challenge$ ls
data2  data.txt
bandit12@bandit:/tmp/challenge$ file data2
data2: bzip2 compressed data, block size = 900k
bandit12@bandit:/tmp/challenge$ mv data2 data3.bz
bandit12@bandit:/tmp/challenge$ ls
data3.bz  data.txt
bandit12@bandit:/tmp/challenge$ bzip2 -d data3.bz
bandit12@bandit:/tmp/challenge$ ls
data3  data.txt
bandit12@bandit:/tmp/challenge$ file data3
data3: gzip compressed data, was "data4.bin", last modified: Thu May  7 18:14:30 2020, max compression, from Unix
bandit12@bandit:/tmp/challenge$ mv data3 data4.gz
bandit12@bandit:/tmp/challenge$ ls
data4.gz  data.txt
bandit12@bandit:/tmp/challenge$ gzip -d data4.gz 
bandit12@bandit:/tmp/challenge$ ls
data4  data.txt
bandit12@bandit:/tmp/challenge$ file data4
data4: POSIX tar archive (GNU)
bandit12@bandit:/tmp/challenge$ mv data4 data5.tar
bandit12@bandit:/tmp/challenge$ ls
data5.tar  data.txt
bandit12@bandit:/tmp/challenge$ tar -xf data5.tar
bandit12@bandit:/tmp/challenge$ ls
data5.bin  data5.tar  data.txt
bandit12@bandit:/tmp/challenge$ file data5.bin
data5.bin: POSIX tar archive (GNU)
bandit12@bandit:/tmp/challenge$ mv data5.bin data6.tar
bandit12@bandit:/tmp/challenge$ ls
data5.tar  data6.tar  data.txt
bandit12@bandit:/tmp/challenge$ tar -xf data6.tar
bandit12@bandit:/tmp/challenge$ ls
data5.tar  data6.bin  data6.tar  data.txt
bandit12@bandit:/tmp/challenge$ file data6.bin
data6.bin: bzip2 compressed data, block size = 900k
bandit12@bandit:/tmp/challenge$ mv data6.bin data7.bz
bandit12@bandit:/tmp/challenge$ ls
data5.tar  data6.tar  data7.bz  data.txt
bandit12@bandit:/tmp/challenge$ bzip2 -d data7.bz
bandit12@bandit:/tmp/challenge$ ls
data5.tar  data6.tar  data7  data.txt
bandit12@bandit:/tmp/challenge$ file data7
data7: POSIX tar archive (GNU)
bandit12@bandit:/tmp/challenge$ mv data7 data8.tar
bandit12@bandit:/tmp/challenge$ ls
data5.tar  data6.tar  data8.tar  data.txt
bandit12@bandit:/tmp/challenge$ tar -xf data8.tar
bandit12@bandit:/tmp/challenge$ ls
data5.tar  data6.tar  data8.bin  data8.tar  data.txt
bandit12@bandit:/tmp/challenge$ file datat8.bin
datat8.bin: cannot open `datat8.bin' (No such file or directory)
bandit12@bandit:/tmp/challenge$ file data8.bin
data8.bin: gzip compressed data, was "data9.bin", last modified: Thu May  7 18:14:30 2020, max compression, from Unix
bandit12@bandit:/tmp/challenge$ mv data8.bin data9.gz
bandit12@bandit:/tmp/challenge$ ls
data5.tar  data6.tar  data8.tar  data9.gz  data.txt
bandit12@bandit:/tmp/challenge$ gzip data9.gz
gzip: data9.gz already has .gz suffix -- unchanged
bandit12@bandit:/tmp/challenge$ gzip -d data9.gz 
bandit12@bandit:/tmp/challenge$ ls
data5.tar  data6.tar  data8.tar  data9  data.txt
bandit12@bandit:/tmp/challenge$ file data9
data9: ASCII text
bandit12@bandit:/tmp/challenge$ cat data9
The password is 8ZjyCRiBWFYkneahHwxCv3wb2a1ORpYL
bandit12@bandit:/tmp/challenge$ exit
logout
Connection to bandit.labs.overthewire.org closed.
                                                                                                                                   
┌──(theblackthreat㉿theblackthreat)-[~]
└─$ ssh -p 2220 bandit13@bandit.labs.overthewire.org
This is a OverTheWire game server. More information on http://www.overthewire.org/wargames

bandit13@bandit.labs.overthewire.org's password: 
Linux bandit.otw.local 5.4.8 x86_64 GNU/Linux

      ,----..            ,----,          .---.
     /   /   \         ,/   .`|         /. ./|
    /   .     :      ,`   .'  :     .--'.  ' ;
   .   /   ;.  \   ;    ;     /    /__./ \ : |
  .   ;   /  ` ; .'___,/    ,' .--'.  '   \' .
  ;   |  ; \ ; | |    :     | /___/ \ |    ' '
  |   :  | ; | ' ;    |.';  ; ;   \  \;      :
  .   |  ' ' ' : `----'  |  |  \   ;  `      |
  '   ;  \; /  |     '   :  ;   .   \    .\  ;
   \   \  ',  /      |   |  '    \   \   ' \ |
    ;   :    /       '   :  |     :   '  |--"
     \   \ .'        ;   |.'       \   \ ;
  www. `---` ver     '---' he       '---" ire.org


Welcome to OverTheWire!

---[SNIP]---

--[ More information ]--

  For more information regarding individual wargames, visit
  http://www.overthewire.org/wargames/

  For support, questions or comments, contact us through IRC on
  irc.overthewire.org #wargames.

  Enjoy your stay!

bandit13@bandit:~$ ls
sshkey.private
bandit13@bandit:~$ ssh -i sshkey.private bandit14@localhost
Could not create directory '/home/bandit13/.ssh'.
The authenticity of host 'localhost (127.0.0.1)' can't be established.
ECDSA key fingerprint is SHA256:98UL0ZWr85496EtCRkKlo20X3OPnyPSB5tB5RPbhczc.
Are you sure you want to continue connecting (yes/no)? yes
Failed to add the host to the list of known hosts (/home/bandit13/.ssh/known_hosts).
This is a OverTheWire game server. More information on http://www.overthewire.org/wargames

Linux bandit.otw.local 5.4.8 x86_64 GNU/Linux

      ,----..            ,----,          .---.
     /   /   \         ,/   .`|         /. ./|
    /   .     :      ,`   .'  :     .--'.  ' ;
   .   /   ;.  \   ;    ;     /    /__./ \ : |
  .   ;   /  ` ; .'___,/    ,' .--'.  '   \' .
  ;   |  ; \ ; | |    :     | /___/ \ |    ' '
  |   :  | ; | ' ;    |.';  ; ;   \  \;      :
  .   |  ' ' ' : `----'  |  |  \   ;  `      |
  '   ;  \; /  |     '   :  ;   .   \    .\  ;
   \   \  ',  /      |   |  '    \   \   ' \ |
    ;   :    /       '   :  |     :   '  |--"
     \   \ .'        ;   |.'       \   \ ;
  www. `---` ver     '---' he       '---" ire.org


Welcome to OverTheWire!

---[SNIP]---


--[ More information ]--

  For more information regarding individual wargames, visit
  http://www.overthewire.org/wargames/

  For support, questions or comments, contact us through IRC on
  irc.overthewire.org #wargames.

  Enjoy your stay!

bandit14@bandit:~$ ls
bandit14@bandit:~$ ls -al
total 24
drwxr-xr-x  3 root root 4096 May  7  2020 .
drwxr-xr-x 41 root root 4096 May  7  2020 ..
-rw-r--r--  1 root root  220 May 15  2017 .bash_logout
-rw-r--r--  1 root root 3526 May 15  2017 .bashrc
-rw-r--r--  1 root root  675 May 15  2017 .profile
drwxr-xr-x  2 root root 4096 May  7  2020 .ssh
bandit14@bandit:~$ cat /etc/bandit_pass/bandit14
4wcYUJFw0k0XLShlDzztnTBHiqxU3b3e
bandit14@bandit:~$ exit
logout
Connection to localhost closed.
bandit13@bandit:~$ exit
logout
Connection to bandit.labs.overthewire.org closed.
                                                                                                                                   
┌──(theblackthreat㉿theblackthreat)-[~]
└─$ ssh -p 2220 bandit14@bandit.labs.overthewire.org
This is a OverTheWire game server. More information on http://www.overthewire.org/wargames

bandit14@bandit.labs.overthewire.org's password: 
Linux bandit.otw.local 5.4.8 x86_64 GNU/Linux

      ,----..            ,----,          .---.
     /   /   \         ,/   .`|         /. ./|
    /   .     :      ,`   .'  :     .--'.  ' ;
   .   /   ;.  \   ;    ;     /    /__./ \ : |
  .   ;   /  ` ; .'___,/    ,' .--'.  '   \' .
  ;   |  ; \ ; | |    :     | /___/ \ |    ' '
  |   :  | ; | ' ;    |.';  ; ;   \  \;      :
  .   |  ' ' ' : `----'  |  |  \   ;  `      |
  '   ;  \; /  |     '   :  ;   .   \    .\  ;
   \   \  ',  /      |   |  '    \   \   ' \ |
    ;   :    /       '   :  |     :   '  |--"
     \   \ .'        ;   |.'       \   \ ;
  www. `---` ver     '---' he       '---" ire.org


Welcome to OverTheWire!

---[SNIP]---

--[ More information ]--

  For more information regarding individual wargames, visit
  http://www.overthewire.org/wargames/

  For support, questions or comments, contact us through IRC on
  irc.overthewire.org #wargames.

  Enjoy your stay!


---------------------------
bandit14@bandit:~$ ls
bandit14@bandit:~$ ifconfig
-bash: ifconfig: command not found
bandit14@bandit:~$ ip -al
Usage: ip [ OPTIONS ] OBJECT { COMMAND | help }
       ip [ -force ] -batch filename
where  OBJECT := { link | address | addrlabel | route | rule | neigh | ntable |
                   tunnel | tuntap | maddress | mroute | mrule | monitor | xfrm |
                   netns | l2tp | fou | macsec | tcp_metrics | token | netconf | ila }
       OPTIONS := { -V[ersion] | -s[tatistics] | -d[etails] | -r[esolve] |
                    -h[uman-readable] | -iec |
                    -f[amily] { inet | inet6 | ipx | dnet | mpls | bridge | link } |
                    -4 | -6 | -I | -D | -B | -0 |
                    -l[oops] { maximum-addr-flush-attempts } | -br[ief] |
                    -o[neline] | -t[imestamp] | -ts[hort] | -b[atch] [filename] |
                    -rc[vbuf] [size] | -n[etns] name | -a[ll] | -c[olor]}
bandit14@bandit:~$ clear

bandit14@bandit:~$ ifconfig
-bash: ifconfig: command not found
bandit14@bandit:~$ ls
bandit14@bandit:~$ telnet
telnet> ;
?Invalid command
telnet> ;;
?Invalid command
telnet> ^C
bandit14@bandit:~$ s_client
-bash: s_client: command not found
bandit14@bandit:~$ ls
bandit14@bandit:~$ cat password | nc localhost -p 300000
no port[s] to connect to
cat: password: No such file or directory
bandit14@bandit:~$ cat 4wcYUJFw0k0XLShlDzztnTBHiqxU3b3e | nc localhost -p 300000
cat: 4wcYUJFw0k0XLShlDzztnTBHiqxU3b3e: No such file or directory
no port[s] to connect to
bandit14@bandit:~$ s_client '4wcYUJFw0k0XLShlDzztnTBHiqxU3b3e' | nc localhost -p 300000
-bash: s_client: command not found
no port[s] to connect to
bandit14@bandit:~$ cat '4wcYUJFw0k0XLShlDzztnTBHiqxU3b3e' | nc localhost -p 300000
cat: 4wcYUJFw0k0XLShlDzztnTBHiqxU3b3e: No such file or directory
no port[s] to connect to
bandit14@bandit:~$ echo '4wcYUJFw0k0XLShlDzztnTBHiqxU3b3e' | nc localhost -p 300000
no port[s] to connect to
bandit14@bandit:~$ echo '4wcYUJFw0k0XLShlDzztnTBHiqxU3b3e' | nc localhost -p 30000
no port[s] to connect to
bandit14@bandit:~$ echo '4wcYUJFw0k0XLShlDzztnTBHiqxU3b3e' | nc -p 30000 localhost
no port[s] to connect to
bandit14@bandit:~$ echo '4wcYUJFw0k0XLShlDzztnTBHiqxU3b3e' | nc 30000 localhost
invalid port localhost
bandit14@bandit:~$ echo '4wcYUJFw0k0XLShlDzztnTBHiqxU3b3e' | nc localhost 30000
Correct!
BfMYroe26WYalil77FoDi9qh59eK5xNr

bandit14@bandit:~$ exit
logout
Connection to bandit.labs.overthewire.org closed.
                                                                                                                                   
┌──(theblackthreat㉿theblackthreat)-[~]
└─$ ssh -p 2220 bandit15@bandit.labs.overthewire.org
This is a OverTheWire game server. More information on http://www.overthewire.org/wargames

bandit15@bandit.labs.overthewire.org's password: 
Linux bandit.otw.local 5.4.8 x86_64 GNU/Linux

      ,----..            ,----,          .---.
     /   /   \         ,/   .`|         /. ./|
    /   .     :      ,`   .'  :     .--'.  ' ;
   .   /   ;.  \   ;    ;     /    /__./ \ : |
  .   ;   /  ` ; .'___,/    ,' .--'.  '   \' .
  ;   |  ; \ ; | |    :     | /___/ \ |    ' '
  |   :  | ; | ' ;    |.';  ; ;   \  \;      :
  .   |  ' ' ' : `----'  |  |  \   ;  `      |
  '   ;  \; /  |     '   :  ;   .   \    .\  ;
   \   \  ',  /      |   |  '    \   \   ' \ |
    ;   :    /       '   :  |     :   '  |--"
     \   \ .'        ;   |.'       \   \ ;
  www. `---` ver     '---' he       '---" ire.org


Welcome to OverTheWire!

---[SNIP]---

--[ More information ]--

  For more information regarding individual wargames, visit
  http://www.overthewire.org/wargames/

  For support, questions or comments, contact us through IRC on
  irc.overthewire.org #wargames.

  Enjoy your stay!

bandit15@bandit:~$ ls
bandit15@bandit:~$ ls -al
total 24
drwxr-xr-x  2 root     root     4096 May 14  2020 .
drwxr-xr-x 41 root     root     4096 May  7  2020 ..
-rw-r-----  1 bandit15 bandit15   33 May 14  2020 .bandit14.password
-rw-r--r--  1 root     root      220 May 15  2017 .bash_logout
-rw-r--r--  1 root     root     3526 May 15  2017 .bashrc
-rw-r--r--  1 root     root      675 May 15  2017 .profile
bandit15@bandit:~$ echo "BfMYroe26WYalil77FoDi9qh59eK5xNr" | nc localhost 30000
Wrong! Please enter the correct current password
bandit15@bandit:~$ ssh -e BfMYroe26WYalil77FoDi9qh59eK5xNr
Bad escape character 'BfMYroe26WYalil77FoDi9qh59eK5xNr'.
bandit15@bandit:~$ ssh BfMYroe26WYalil77FoDi9qh59eK5xNr
ssh: Could not resolve hostname bfmyroe26wyalil77fodi9qh59ek5xnr: No address associated with hostname
bandit15@bandit:~$ openssl s_client \
> -connect localhost:30000
CONNECTED(00000003)
139738360094784:error:1408F10B:SSL routines:ssl3_get_record:wrong version number:../ssl/record/ssl3_record.c:252:
---
no peer certificate available
---
No client certificate CA names sent
---
SSL handshake has read 5 bytes and written 176 bytes
Verification: OK
---
New, (NONE), Cipher is (NONE)
Secure Renegotiation IS NOT supported
Compression: NONE
Expansion: NONE
No ALPN negotiated
SSL-Session:
    Protocol  : TLSv1.2
    Cipher    : 0000
    Session-ID: 
    Session-ID-ctx: 
    Master-Key: 
    PSK identity: None
    PSK identity hint: None
    SRP username: None
    Start Time: 1625844537
    Timeout   : 7200 (sec)
    Verify return code: 0 (ok)
    Extended master secret: no
---
bandit15@bandit:~$ echo "BfMYroe26WYalil77FoDi9qh59eK5xNr" | openssl s_client -connect localhost:30000
CONNECTED(00000003)
140277184733248:error:1408F10B:SSL routines:ssl3_get_record:wrong version number:../ssl/record/ssl3_record.c:252:
---
no peer certificate available
---
No client certificate CA names sent
---
SSL handshake has read 5 bytes and written 176 bytes
Verification: OK
---
New, (NONE), Cipher is (NONE)
Secure Renegotiation IS NOT supported
Compression: NONE
Expansion: NONE
No ALPN negotiated
SSL-Session:
    Protocol  : TLSv1.2
    Cipher    : 0000
    Session-ID: 
    Session-ID-ctx: 
    Master-Key: 
    PSK identity: None
    PSK identity hint: None
    SRP username: None
    Start Time: 1625844711
    Timeout   : 7200 (sec)
    Verify return code: 0 (ok)
    Extended master secret: no
---
bandit15@bandit:~$ echo "BfMYroe26WYalil77FoDi9qh59eK5xNr" | openssl s_client -quiet  -connect localhost:30000
139650928242752:error:1408F10B:SSL routines:ssl3_get_record:wrong version number:../ssl/record/ssl3_record.c:252:
bandit15@bandit:~$ echo BfMYroe26WYalil77FoDi9qh59eK5xNr | openssl s_client -quiet -connect localhost:30000
140373555753024:error:1408F10B:SSL routines:ssl3_get_record:wrong version number:../ssl/record/ssl3_record.c:252:
bandit15@bandit:~$ echo BfMYroe26WYalil77FoDi9qh59eK5xNr | openssl s_client -quiet -connect localhost:30001
depth=0 CN = localhost
verify error:num=18:self signed certificate
verify return:1
depth=0 CN = localhost
verify return:1
Correct!
cluFn7wTiGryunymYOu4RcffSxQluehd

bandit15@bandit:~$ echo cluFn7wTiGryunymYOu4RcffSxQluehd | openssl -s_client \
> 
Invalid command '-s_client'; type "help" for a list.
bandit15@bandit:~$ echo cluFn7wTiGryunymYOu4RcffSxQluehd | openssl -s_client \
> -connect localhost:30001
Invalid command '-s_client'; type "help" for a list.
bandit15@bandit:~$ echo cluFn7wTiGryunymYOu4RcffSxQluehd | openssl -s_client -connect localhost:30001
Invalid command '-s_client'; type "help" for a list.
bandit15@bandit:~$ echo cluFn7wTiGryunymYOu4RcffSxQluehd | openssl -s_client -quiet connect localhost:30001
Invalid command '-s_client'; type "help" for a list.
bandit15@bandit:~$ echo cluFn7wTiGryunymYOu4RcffSxQluehd | openssl s_client -quiet connect localhost:30001
s_client: Use -help for summary.
bandit15@bandit:~$ echo  4wcYUJFw0k0XLShlDzztnTBHiqxU3b3e | openssl s_client -quiet connect localhost:30001
s_client: Use -help for summary.
bandit15@bandit:~$ echo  4wcYUJFw0k0XLShlDzztnTBHiqxU3b3e | openssl s_client -quiet -connect localhost:30001
depth=0 CN = localhost
verify error:num=18:self signed certificate
verify return:1
depth=0 CN = localhost
verify return:1
Wrong! Please enter the correct current password
bandit15@bandit:~$ echo 4wcYUJFw0k0XLShlDzztnTBHiqxU3b3e | openssl s_client -quiet -connect localhost:30001
depth=0 CN = localhost
verify error:num=18:self signed certificate
verify return:1
depth=0 CN = localhost
verify return:1
Wrong! Please enter the correct current password
bandit15@bandit:~$ echo BfMYroe26WYalil77FoDi9qh59eK5xNr | openssl s_client -quiet -connect localhost:30001
depth=0 CN = localhost
verify error:num=18:self signed certificate
verify return:1
depth=0 CN = localhost
verify return:1
Correct!
cluFn7wTiGryunymYOu4RcffSxQluehd

bandit15@bandit:~$ 
bandit16@bandit:~$ echo cluFn7wTiGryunymYOu4RcffSxQluehd | openssl s_client -quiet -connect localhost:31790 
depth=0 CN = localhost
verify error:num=18:self signed certificate
verify return:1
depth=0 CN = localhost
verify return:1
Correct!
-----BEGIN RSA PRIVATE KEY-----
MIIEogIBAAKCAQEAvmOkuifmMg6HL2YPIOjon6iWfbp7c3jx34YkYWqUH57SUdyJ
imZzeyGC0gtZPGujUSxiJSWI/oTqexh+cAMTSMlOJf7+BrJObArnxd9Y7YT2bRPQ
Ja6Lzb558YW3FZl87ORiO+rW4LCDCNd2lUvLE/GL2GWyuKN0K5iCd5TbtJzEkQTu
DSt2mcNn4rhAL+JFr56o4T6z8WWAW18BR6yGrMq7Q/kALHYW3OekePQAzL0VUYbW
JGTi65CxbCnzc/w4+mqQyvmzpWtMAzJTzAzQxNbkR2MBGySxDLrjg0LWN6sK7wNX
x0YVztz/zbIkPjfkU1jHS+9EbVNj+D1XFOJuaQIDAQABAoIBABagpxpM1aoLWfvD
KHcj10nqcoBc4oE11aFYQwik7xfW+24pRNuDE6SFthOar69jp5RlLwD1NhPx3iBl
J9nOM8OJ0VToum43UOS8YxF8WwhXriYGnc1sskbwpXOUDc9uX4+UESzH22P29ovd
d8WErY0gPxun8pbJLmxkAtWNhpMvfe0050vk9TL5wqbu9AlbssgTcCXkMQnPw9nC
YNN6DDP2lbcBrvgT9YCNL6C+ZKufD52yOQ9qOkwFTEQpjtF4uNtJom+asvlpmS8A
vLY9r60wYSvmZhNqBUrj7lyCtXMIu1kkd4w7F77k+DjHoAXyxcUp1DGL51sOmama
+TOWWgECgYEA8JtPxP0GRJ+IQkX262jM3dEIkza8ky5moIwUqYdsx0NxHgRRhORT
8c8hAuRBb2G82so8vUHk/fur85OEfc9TncnCY2crpoqsghifKLxrLgtT+qDpfZnx
SatLdt8GfQ85yA7hnWWJ2MxF3NaeSDm75Lsm+tBbAiyc9P2jGRNtMSkCgYEAypHd
HCctNi/FwjulhttFx/rHYKhLidZDFYeiE/v45bN4yFm8x7R/b0iE7KaszX+Exdvt
SghaTdcG0Knyw1bpJVyusavPzpaJMjdJ6tcFhVAbAjm7enCIvGCSx+X3l5SiWg0A
R57hJglezIiVjv3aGwHwvlZvtszK6zV6oXFAu0ECgYAbjo46T4hyP5tJi93V5HDi
Ttiek7xRVxUl+iU7rWkGAXFpMLFteQEsRr7PJ/lemmEY5eTDAFMLy9FL2m9oQWCg
R8VdwSk8r9FGLS+9aKcV5PI/WEKlwgXinB3OhYimtiG2Cg5JCqIZFHxD6MjEGOiu
L8ktHMPvodBwNsSBULpG0QKBgBAplTfC1HOnWiMGOU3KPwYWt0O6CdTkmJOmL8Ni
blh9elyZ9FsGxsgtRBXRsqXuz7wtsQAgLHxbdLq/ZJQ7YfzOKU4ZxEnabvXnvWkU
YOdjHdSOoKvDQNWu6ucyLRAWFuISeXw9a/9p7ftpxm0TSgyvmfLF2MIAEwyzRqaM
77pBAoGAMmjmIJdjp+Ez8duyn3ieo36yrttF5NSsJLAbxFpdlc1gvtGCWW+9Cq0b
dxviW8+TFVEBl1O4f7HVm6EpTscdDxU+bCXWkfjuRb7Dy9GOtt9JPsX8MBTakzh3
vBgsyi/sN3RqRBcGU40fOoZyfAMT8s1m/uYv52O6IgeuZ/ujbjY=
-----END RSA PRIVATE KEY-----

bandit16@bandit:~$ 

┌──(theblackthreat㉿theblackthreat)-[~/Desktop]
└─$ sudo chmod 400 bandit17.key                                                      
                                                                                               
┌──(theblackthreat㉿theblackthreat)-[~/Desktop]
└─$ ssh -i bandit17.key bandit17@bandit.labs.overthewire.org -p 2220                       2 ⚙
This is a OverTheWire game server. More information on http://www.overthewire.org/wargames

Linux bandit.otw.local 5.4.8 x86_64 GNU/Linux

      ,----..            ,----,          .---.
     /   /   \         ,/   .`|         /. ./|
    /   .     :      ,`   .'  :     .--'.  ' ;
   .   /   ;.  \   ;    ;     /    /__./ \ : |
  .   ;   /  ` ; .'___,/    ,' .--'.  '   \' .
  ;   |  ; \ ; | |    :     | /___/ \ |    ' '
  |   :  | ; | ' ;    |.';  ; ;   \  \;      :
  .   |  ' ' ' : `----'  |  |  \   ;  `      |
  '   ;  \; /  |     '   :  ;   .   \    .\  ;
   \   \  ',  /      |   |  '    \   \   ' \ |
    ;   :    /       '   :  |     :   '  |--"
     \   \ .'        ;   |.'       \   \ ;
  www. `---` ver     '---' he       '---" ire.org


Welcome to OverTheWire!

---[SNIP]---
--[ More information ]--

  For more information regarding individual wargames, visit
  http://www.overthewire.org/wargames/

  For support, questions or comments, contact us through IRC on
  irc.overthewire.org #wargames.

  Enjoy your stay!

bandit17@bandit:~$ ls
passwords.new  passwords.old
bandit17@bandit:~$ diff passwords.new passwords.old 
42c42
< kfBf3eYk5BPBRzwjqutbbfE887SVc5Yd
---
> w0Yfolrc5bwjS4qw5mq1nnQi6mF03bii
bandit17@bandit:~$ 

┌──(theblackthreat㉿theblackthreat)-[~]
└─$ ssh  bandit18@bandit.labs.overthewire.org -p 2220
This is a OverTheWire game server. More information on http://www.overthewire.org/wargames

bandit18@bandit.labs.overthewire.org's password: 
Linux bandit.otw.local 5.4.8 x86_64 GNU/Linux

      ,----..            ,----,          .---.
     /   /   \         ,/   .`|         /. ./|
    /   .     :      ,`   .'  :     .--'.  ' ;
   .   /   ;.  \   ;    ;     /    /__./ \ : |
  .   ;   /  ` ; .'___,/    ,' .--'.  '   \' .
  ;   |  ; \ ; | |    :     | /___/ \ |    ' '
  |   :  | ; | ' ;    |.';  ; ;   \  \;      :
  .   |  ' ' ' : `----'  |  |  \   ;  `      |
  '   ;  \; /  |     '   :  ;   .   \    .\  ;
   \   \  ',  /      |   |  '    \   \   ' \ |
    ;   :    /       '   :  |     :   '  |--"
     \   \ .'        ;   |.'       \   \ ;
  www. `---` ver     '---' he       '---" ire.org


Welcome to OverTheWire!

---[SNIP]---
--[ More information ]--

  For more information regarding individual wargames, visit
  http://www.overthewire.org/wargames/

  For support, questions or comments, contact us through IRC on
  irc.overthewire.org #wargames.

  Enjoy your stay!

Byebye !
Connection to bandit.labs.overthewire.org closed.

┌──(theblackthreat㉿theblackthreat)-[~/Desktop]
└─$ ssh bandit18@bandit.labs.overthewire.org -p 2220 cat readme                                                              255 ⨯
This is a OverTheWire game server. More information on http://www.overthewire.org/wargames

bandit18@bandit.labs.overthewire.org's password: 
IueksS7Ubh8G3DCwVzrTd8rAVOwq3M5x
                                                                                                                                   
┌──(theblackthreat㉿theblackthreat)-[~/Desktop]
└─$ ssh bandit19@bandit.labs.overthewire.org -p 2220           
This is a OverTheWire game server. More information on http://www.overthewire.org/wargames

bandit19@bandit.labs.overthewire.org's password: 
Linux bandit.otw.local 5.4.8 x86_64 GNU/Linux

      ,----..            ,----,          .---.
     /   /   \         ,/   .`|         /. ./|
    /   .     :      ,`   .'  :     .--'.  ' ;
   .   /   ;.  \   ;    ;     /    /__./ \ : |
  .   ;   /  ` ; .'___,/    ,' .--'.  '   \' .
  ;   |  ; \ ; | |    :     | /___/ \ |    ' '
  |   :  | ; | ' ;    |.';  ; ;   \  \;      :
  .   |  ' ' ' : `----'  |  |  \   ;  `      |
  '   ;  \; /  |     '   :  ;   .   \    .\  ;
   \   \  ',  /      |   |  '    \   \   ' \ |
    ;   :    /       '   :  |     :   '  |--"
     \   \ .'        ;   |.'       \   \ ;
  www. `---` ver     '---' he       '---" ire.org


Welcome to OverTheWire!

If you find any problems, please report them to Steven or morla on
irc.overthewire.org.

--[ Playing the games ]--

  This machine might hold several wargames.
  If you are playing "somegame", then:

    * USERNAMES are somegame0, somegame1, ...
    * Most LEVELS are stored in /somegame/.
    * PASSWORDS for each level are stored in /etc/somegame_pass/.

  Write-access to homedirectories is disabled. It is advised to create a
  working directory with a hard-to-guess name in /tmp/.  You can use the
  command "mktemp -d" in order to generate a random and hard to guess
  directory in /tmp/.  Read-access to both /tmp/ and /proc/ is disabled
  so that users can not snoop on eachother. Files and directories with
  easily guessable or short names will be periodically deleted!

  Please play nice:

    * don't leave orphan processes running
    * don't leave exploit-files laying around
    * don't annoy other players
    * don't post passwords or spoilers
    * again, DONT POST SPOILERS!
      This includes writeups of your solution on your blog or website!

--[ Tips ]--

  This machine has a 64bit processor and many security-features enabled
  by default, although ASLR has been switched off.  The following
  compiler flags might be interesting:

    -m32                    compile for 32bit
    -fno-stack-protector    disable ProPolice
    -Wl,-z,norelro          disable relro

  In addition, the execstack tool can be used to flag the stack as
  executable on ELF binaries.

  Finally, network-access is limited for most levels by a local
  firewall.

--[ Tools ]--

 For your convenience we have installed a few usefull tools which you can find
 in the following locations:

    * gef (https://github.com/hugsy/gef) in /usr/local/gef/
    * pwndbg (https://github.com/pwndbg/pwndbg) in /usr/local/pwndbg/
    * peda (https://github.com/longld/peda.git) in /usr/local/peda/
    * gdbinit (https://github.com/gdbinit/Gdbinit) in /usr/local/gdbinit/
    * pwntools (https://github.com/Gallopsled/pwntools)
    * radare2 (http://www.radare.org/)
    * checksec.sh (http://www.trapkit.de/tools/checksec.html) in /usr/local/bin/checksec.sh

--[ More information ]--

  For more information regarding individual wargames, visit
  http://www.overthewire.org/wargames/

  For support, questions or comments, contact us through IRC on
  irc.overthewire.org #wargames.

  Enjoy your stay!

bandit19@bandit:~$ ls
bandit20-do
bandit19@bandit:~$ client_loop: send disconnect: Broken pipe
                                                                                                                                    
┌──(theblackthreat㉿theblackthreat)-[~/Desktop]
└─$ ssh bandit19@bandit.labs.overthewire.org -p 2220                                                                          255 ⨯
This is a OverTheWire game server. More information on http://www.overthewire.org/wargames

bandit19@bandit.labs.overthewire.org's password: 
Linux bandit.otw.local 5.4.8 x86_64 GNU/Linux

      ,----..            ,----,          .---.
     /   /   \         ,/   .`|         /. ./|
    /   .     :      ,`   .'  :     .--'.  ' ;
   .   /   ;.  \   ;    ;     /    /__./ \ : |
  .   ;   /  ` ; .'___,/    ,' .--'.  '   \' .
  ;   |  ; \ ; | |    :     | /___/ \ |    ' '
  |   :  | ; | ' ;    |.';  ; ;   \  \;      :
  .   |  ' ' ' : `----'  |  |  \   ;  `      |
  '   ;  \; /  |     '   :  ;   .   \    .\  ;
   \   \  ',  /      |   |  '    \   \   ' \ |
    ;   :    /       '   :  |     :   '  |--"
     \   \ .'        ;   |.'       \   \ ;
  www. `---` ver     '---' he       '---" ire.org


Welcome to OverTheWire!

---[SNIP]---

--[ More information ]--

  For more information regarding individual wargames, visit
  http://www.overthewire.org/wargames/

  For support, questions or comments, contact us through IRC on
  irc.overthewire.org #wargames.

  Enjoy your stay!

bandit19@bandit:~$ ls -al
total 28
drwxr-xr-x  2 root     root     4096 May  7  2020 .
drwxr-xr-x 41 root     root     4096 May  7  2020 ..
-rwsr-x---  1 bandit20 bandit19 7296 May  7  2020 bandit20-do
-rw-r--r--  1 root     root      220 May 15  2017 .bash_logout
-rw-r--r--  1 root     root     3526 May 15  2017 .bashrc
-rw-r--r--  1 root     root      675 May 15  2017 .profile
bandit19@bandit:~$ stat bandit20-do 
  File: bandit20-do
  Size: 7296        Blocks: 16         IO Block: 4096   regular file
Device: fb01h/64257d  Inode: 145188      Links: 1
Access: (4750/-rwsr-x---)  Uid: (11020/bandit20)   Gid: (11019/bandit19)
Access: 2021-07-09 08:46:18.791837865 +0200
Modify: 2020-05-07 20:14:40.168727240 +0200
Change: 2020-05-07 20:14:40.168727240 +0200
 Birth: -
bandit19@bandit:~$ cat bandit20-do 
ELFp4�4   (444  TT ��hhhDDP�td���44Q�tdR��/lib/ld-linux.so.2GNU GNU��$���
�{"�$�~��*��  �K��%> �,
M��                    Llibc.so.6_IO_stdin_usedexitexecvprintf__libc_start_main__gmon_start__GLIBC_2.0ii
  S����
  d as another user.
  Example: %s id
env/usr/bin/env0|���L����p�����<���������zR|
 .3.0 20170516Th�<�Ă�    
                                                 �
 ---[SNIP]---
  � �
bandit19@bandit:~$ chmod 777 bandit20-do 
chmod: changing permissions of 'bandit20-do': Operation not permitted
bandit19@bandit:~$ ./bandit20-do 
Run a command as another user.
  Example: ./bandit20-do id
bandit19@bandit:~$ ./bandit20-do id
uid=11019(bandit19) gid=11019(bandit19) euid=11020(bandit20) groups=11019(bandit19)
bandit19@bandit:~$ ./bandit20-do ls
bandit20-do
bandit19@bandit:~$ ./bandit20-do cat /etc/ba
bandit_pass/       bash.bashrc        bash_completion    bash_completion.d/ 
bandit19@bandit:~$ ./bandit20-do cat /etc/bandit_pass/bandit
bandit0   bandit11  bandit14  bandit17  bandit2   bandit22  bandit25  bandit28  bandit30  bandit33  bandit6   bandit9   
bandit1   bandit12  bandit15  bandit18  bandit20  bandit23  bandit26  bandit29  bandit31  bandit4   bandit7   
bandit10  bandit13  bandit16  bandit19  bandit21  bandit24  bandit27  bandit3   bandit32  bandit5   bandit8   
bandit19@bandit:~$ ./bandit20-do cat /etc/bandit_pass/bandit
bandit0   bandit11  bandit14  bandit17  bandit2   bandit22  bandit25  bandit28  bandit30  bandit33  bandit6   bandit9   
bandit1   bandit12  bandit15  bandit18  bandit20  bandit23  bandit26  bandit29  bandit31  bandit4   bandit7   
bandit10  bandit13  bandit16  bandit19  bandit21  bandit24  bandit27  bandit3   bandit32  bandit5   bandit8   
bandit19@bandit:~$ ./bandit20-do cat /etc/bandit_pass/bandit
bandit0   bandit11  bandit14  bandit17  bandit2   bandit22  bandit25  bandit28  bandit30  bandit33  bandit6   bandit9   
bandit1   bandit12  bandit15  bandit18  bandit20  bandit23  bandit26  bandit29  bandit31  bandit4   bandit7   
bandit10  bandit13  bandit16  bandit19  bandit21  bandit24  bandit27  bandit3   bandit32  bandit5   bandit8   
bandit19@bandit:~$ ./bandit20-do cat /etc/bandit_pass/bandit20
GbKksEFF4yrVs6il55v6gwY5aVje5f0j
bandit19@bandit:~$ 


```
