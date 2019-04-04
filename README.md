控制器-》方法-》结构
正在进行	Pactivity	
列表【index
创建活动【edit
申请人列【applications	 	 			
岗位申请【jobs
详情【table

以往项目	Activity
·	列表【index
  详情【table


数据库-》结构
organizers		活动人员表 
post_apply		岗位申请表
activity		活动方案表
applications	参加活动申请表
admin_user	角色表
stu_apply		学生表
post			岗位表

系统表
admin_user		用户表	字段：coll【所属学院】
admin_role			角色表
admin_role_user		角色用户关联表

admin_node		节点表
admin_access		节点关联表

通过用户表Name拿到id，通过id找到关联表的role_id，
通过role_id找到节点表的Name是不是学生处审批
给生成




正在进行-》列表
四种状态 - 对应显示
0待审核		可撤回
1已审核待发步	发布
2审核已发布	岗位申请、人员申请、结束
3.活动已经结束	活动已结束【结束后正在进行内不显示、放到以前项目列表里】
4.退回
5.二级自己撤回
正在进行-》申请人列
三种状态 - 对应显示
0代审核		通过退回
1通过		通过			
2退回		退回
正在进行-》岗位申请
三种状态 - 对应显示
0代审核		通过退回
1通过		通过			
2退回		退回

stu_apply	学生表的姓名
post		岗位表的名字
post_apply	 岗位申请
applications  参加活动申请表的活动id
organizers	人员表

状态
三种状态 - 对应显示
0代审核		
1通过			
2退回
3.学生处通过
4.学生处退回		


## License
Apache 2.0#临沂职业学院
