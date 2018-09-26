#!/usr/bin/env python
#! -*- coding:utf-8 -*-

serverid=int(input("Please import serverID:"))

import MySQLdb

database = 'ygo_'+str(serverid);

db = MySQLdb.connect(host="10.10.133.19",user="root", passwd="YMuOR9MI3fQDk6UxjNlT", db=database, port = 3307 , charset='utf8' )

cursor = db.cursor()

sql = "SELECT ID,UID,RID FROM tb_user WHERE ID < '%d'" % (5)

try:
   # 执行SQL语句
   cursor.execute(sql)
   # 获取所有记录列表
   results = cursor.fetchall()
   for row in results:
      ID = row[0]
      UID = row[1]
      RID = row[2]
      # 打印结果
      print "ID=%s,UID=%s,RID=%d" % (ID, UID, RID )
except:
   print "Error: unable to fecth data"

# 关闭数据库连接
db.close()

#print (serverid);
