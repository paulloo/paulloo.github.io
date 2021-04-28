---
layout: post
title: graphql实现增删改查
subtitle: from Paul
categories: [js]
author: Paul
---



```

const DB = require('../model/db.js');
 
const {
    GraphQLObjectType,
    GraphQLString,
    GraphQLInt,
    GraphQLList,
    GraphQLSchema,
    GraphQLID,
    GraphQLFloat,
    GraphQLNonNull
} = require('graphql')
 
// 1.定义导航的schema，映射要操作表的字段
var NavSchema = new GraphQLObjectType({
    name: 'nav',
    fields: {
        _id: { type: GraphQLString },
        title: {type: GraphQLString}, 
        url: {type: GraphQLString},
        sort: {type: GraphQLInt},
        status: {type: GraphQLString},
        add_time: {type: GraphQLString}
    }
})
 
// 2.1.定义一个根,配置查询的方法
var RootSchema = new GraphQLObjectType({
    name: 'root',
    fields: {
        navList: {
            type: GraphQLList(NavSchema),
            async resolve(parent, args) {
                var navList = await DB.find('nav', {});
                return navList;
            }
        },
        oneNavList: {
            type: NavSchema,
            args: {
                _id: {type: GraphQLString}
            },
            async resolve(parent, args) {
                var oneNavList = await DB.find('nav', { "_id": DB.getObjectId(args._id)});
                return oneNavList[0];
            }
        }
    }
})
 
// 2.2.定义一个根,配置增加、修改、删除的方法
var MutationSchema=new GraphQLObjectType({
    name:"mutation",
    fields:{
        // 添加的方法
        addNav:{
            // 数据类型
            type:NavSchema,
            // 接收的参数
            args:{
                title: {type: new GraphQLNonNull(GraphQLString)},
                url: {type: GraphQLNonNull(GraphQLString)},
                sort: {type: GraphQLInt},
                status: {type: GraphQLString},
                add_time: {type: GraphQLString}
            },
            // 操作的方法
            async resolve(parent, args) {
                var result = await DB.insert('nav', {
                    title:args.title,
                    url:args.url,
                    sort:args.sort,
                    status:args.status,
                    add_time:new Date().getTime()
                });
                return result.ops[0];
            }
        },
        // 编辑的方法
        editNav:{
            type:NavSchema,
            args:{
                // GraphQLNonNull代表必传字段
                _id:{type: new GraphQLNonNull(GraphQLString)},
                title: {type: new GraphQLNonNull(GraphQLString)},     
                url: {type: GraphQLNonNull(GraphQLString)},
                sort: {type: GraphQLInt},
                status: {type: GraphQLString},
                add_time: {type: GraphQLString}
            },
            async resolve(parent, args) {
                await DB.update('nav', {"_id":DB.getObjectId(args._id)},{
                    title:args.title,
                    url:args.url,
                    sort:args.sort,
                    status:args.status,
                    add_time:new Date().getTime()
                });
                return {
                    _id:args._id,
                    title:args.title,
                    url:args.url,
                    sort:args.sort,
                    status:args.status,
                    add_time:new Date().getTime()
                }
            }
        },
        deleteNav:{
            type:NavSchema,
            args:{
                _id:{type: new GraphQLNonNull(GraphQLString)},
            },
            async resolve(parent, args) {
                var oneNavList = await DB.find('nav', { "_id": DB.getObjectId(args._id)});
                var deleteResult = await DB.remove('nav', {"_id":DB.getObjectId(args._id)});
                // 用影响的行业来判断是否成功
                if(deleteResult.result.n){
                    return oneNavList[0];  
                }else{
                    return {}
                }
            }
        }  
    }
})
 
// 3.将定义的所有的根，挂载到GraphQLSchema上
module.exports = new GraphQLSchema({
    query: RootSchema,
    mutation:MutationSchema
})

```