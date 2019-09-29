<template>
    <div class="main">
        <div class="top">
            <div class="top-left">
                <p>食在帮后台管理系统</p>
            </div>
            <div class="top-right">
                   <!-- <img src="tou.jpg" alt="">
                    <p>hfoghrngmfk</p>  -->
            </div>
        </div>
        <div class="body">
            <div class="left">
                <div class="tou">
                     <dl>
                         <dt><img src="ya.jpg" alt=""></dt>
                         <dd>亚历山大</dd>
                     </dl>
                     <input type="text" class="inp" placeholder="请输入商品名称">
                </div>
                <div class="dao">
                    <el-row class="tac">
                    <el-col :span="24">
                        <el-menu
                        default-active="2"
                        class="el-menu-vertical-demo"
                        @open="handleOpen"
                        @close="handleClose"
                        background-color="#545c64"
                        text-color="#fff"
                        active-text-color="#ffd04b">
                        <el-submenu index="1">
                            <template slot="title">
                            <i class="el-icon-location"></i>
                            <span>导航一</span>
                            </template>
                            <el-menu-item-group>
                            <template slot="title">分组一</template>
                            <el-menu-item index="1-1">选项1</el-menu-item>
                            <el-menu-item index="1-2">选项2</el-menu-item>
                            </el-menu-item-group>
                            <el-menu-item-group title="分组2">
                            <el-menu-item index="1-3">选项3</el-menu-item>
                            </el-menu-item-group>
                            <el-submenu index="1-4">
                            <template slot="title">选项4</template>
                            <el-menu-item index="1-4-1">选项1</el-menu-item>
                            </el-submenu>
                        </el-submenu>
                        <el-menu-item index="2">
                            <i class="el-icon-menu"></i>
                            <span slot="title">导航二</span>
                        </el-menu-item>
                        <el-menu-item index="3" disabled>
                            <i class="el-icon-document"></i>
                            <span slot="title">导航三</span>
                        </el-menu-item>
                        <el-menu-item index="4">
                            <i class="el-icon-setting"></i>
                            <span slot="title">导航四</span>
                        </el-menu-item>
                        </el-menu>
                    </el-col>
                    </el-row>
                </div>
            </div>
            <div class="right">
                <div class="title">
                     <ul class="oul">
                         <li>全部商品</li>
                         <li>详情</li>
                         <li>回收站</li>
                     </ul>
                </div>
                <div class="neei">
                     
                </div>
            </div>
        </div>
        
    </div>
</template>
<script>
export default {
    
}
</script>
<style scoped>
.oul li
{
    float: left;
    font-size: 16px;
    margin-top: 10px;
    margin-left: 20px;
}
.oul li:hover
{
    color: skyblue;
}
.title
{
    width: 100%;
    height: 50px;
    background: white;
}
.neei
{
    flex: 1;
    background: white;
}
.tac
{
    background: #222d31;
}
.tou    
{
    width: 100%;
    height: 100px;
    background: #222d31;
}
.dao
{
    flex: 1;
}
.inp
{
    background: #374850;
    border: none;
    outline: none;
    color: white;
    width: 80%;
    height: 30px;
    margin-left: 15px;
    text-indent: 2em;
}
.tou dl dt
{
    float: left;
    margin-top: 10px;
    margin-left: 10px;
    margin-right: 10px;
}
.tou dl dd
{
    font-size: 15px;
    padding-top: 15px;
    padding-left: 20px;
    color: white;
}
.top-right dl
{
    /* float:right; */
    position: absolute;
    right: 0px;
} 
.top-right dl dt img
{
    float: left;
}
.top-left p{
    font-size: 16px;
    text-align: center;
    margin-top: 5px;
}
.top-left
{
    width: 15%;
    height: 100%;
    background: #367fa8;
}
.top-right
{
    flex: 1;
    background: #3c8dbc;
}
.main
{
    width: 100%;
    height: 730px;
    background: pink;
    display: flex;
    flex-direction: column;
}
.top
{
    width: 100%;
    height: 40px;
    background: #3c8dbc;
    display: flex;
}
.body
{
    flex: 1;
    background: red;
    display: flex;
}
.left  
{
    width: 15%;
    background: #222d31;
    display: flex;
    flex-direction: column;
}
.right
{
    flex: 1;
    background: white;
    display: flex;
    flex-direction: column;
}
</style>