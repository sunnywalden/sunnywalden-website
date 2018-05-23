#!/usr/bin/python
# -*- coding: UTF-8 -*-

import time
import calendar
import datetime

t = time.strftime("%a %b %d %H:%M:%S %Y", time.localtime())
c = calendar.month(2016, 7)

team = {'germany': {'type': 4231, 'ST': 'Gomes', 'LM': 'Gotze', 'CAM': 'Ozil', 'RM': 'Muller', 'CM': 'Kroos', 'CDM': 'Khedira', 'LB': 'Hector', 'LCB': 'Hummels', 'RCB': 'Boateng', 'RB': 'Kimmich', 'GK': 'Neuer'},
'france': {'type': 433, 'ST': 'Ground', 'LW': 'Payet', 'RW': 'Grezman', 'LCM': 'Matuidi', 'CM': 'Kante', 'RCM': 'Pogba', 'LB': 'Evra', 'RCB': 'Lami', 'LCB': 'Koscielny', 'RB': 'Sagna', 'GK': 'LIoris'},
'Wales': {'type': 3511, 'ST': 'Vokes', 'CF': 'Bale', 'LM': 'Taylor', 'LCM': 'Ramsey', 'CM': 'Ledley', 'RCM': 'J.Allen', 'RM': 'Gunter', 'LCB': 'B.Davies', 'CB': 'A.Williams', 'RCB': 'Chester', 'GK': 'Hennessey'},
'poland': {'type': 442, 'LST': 'Lewandowski', 'RST': 'Milik', 'LM': 'Grosicki', 'LCM': 'Maczynski', 'RCM': 'Krychowiak', 'RM': 'Blaszczykowski', 'LB': 'Jedrzejczyk', 'LCB': 'Pazdan', 'RCB': 'Glik', 'RB': 'Piszczek', 'GK': 'Fabianski'},
'belgium': {'type': 4231, 'ST': 'Lukaku', 'LM': 'Hazard', 'CAM': 'De Bruyne', 'RM': 'Mertens', 'LCM': 'Witsel', 'RCM': 'Nainggolan', 'LB': 'Vertonghen', 'LCB': 'Vermaelon', 'RCB': 'Alderweireld', 'RB': 'Meunier', 'GK': 'Courtois'},
'italy': {'type': 352, 'LST': 'Martins', 'RST': 'Pelle', 'LM': 'De Sciglio', 'LCM': 'Giaccherini', 'CM': 'De Rosst', 'RCM': 'Parolo', 'RM': 'Florenzi', 'LCB': 'Chiellini', 'CB': 'Bonucci', 'RCB': 'Barzagli', 'GK': 'Buffon'},
'portugal': {'type': 442, 'LST': 'C.Ronaldo', 'RST': 'Nani', 'LM': 'Gomes', 'LCM': 'Carvalho', 'RCM': 'Silva', 'RM': 'Mario', 'LB': 'Guerreiro', 'LCB': 'Fante', 'RCB': 'Pepe', 'RB': 'Soares', 'GK': 'Patricio'},
'iceland': {'type': 442, 'LST': 'Boovarsson', 'RST': 'Sigporsson', 'LM': 'Bjarnason', 'LCM': 'Gunnarsson', 'RCM': 'Sigurosson', 'RM': 'Guomundsson', 'LB': 'Skulason', 'LCB': 'Sigurosson', 'RCB': 'Arnason', 'RB': 'Saevarsson', 'GK': 'Halldorsson'}}

nation = raw_input('Please input one of the nation team that entered the quater final you interested:')

print t
print c

st1 = time.strftime("%Y %m %d %H:%M:%S", time.localtime())
st = time.mktime(time.strptime(st1,"%Y %m %d %H:%M:%S"))
#t1 = time.strptime(stime,"%Y %m %d %H:%M:%S")
#print t1
#stime = datetime.datetime(st[0],st[1],st[2],st[3],st[4],st[5])
#stime = datetime.datetime(st)
#print stime
t = "2016 7 1 03:00:00"
et = time.mktime(time.strptime(t,"%Y %m %d %H:%M:%S"))
#etime = datetime.datetime(et[0],et[1],et[2],et[3],et[4],et[5])
#etime = datetime.datetime(et)

#print etime
#t = (stime - etime).seconds
t = et - st

print "Your favorite is:",nation
print "The starting lineup is below:"
print team[nation]

#t1 = time.strftime("%Y %m %d %H:%M:%S",st)
print "当前时间:",st1
print "距离2016法国欧洲杯四分之一决赛开始还有:", t, "秒。敬请期待！"
