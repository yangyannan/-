<template>
    <div class="app"> 
    注册<br />     
        用户名：<input type="text" name="uName" v-model="uName"><br />
        密码：<input type="text" name="uPwd" v-model="uPwd"> 
        <button @click="reg()">注册</button>
    </div>
</template>
<script>
export default{
  data(){
    return {
      uName:"",
      uPwd:"",
    }
  },
  methods:{
    reg(){
      let uName = this.uName
      let uPwd = this.uPwd
      let url  = "http://localhost:8888/login/api/test.php?uName="+uName+"&uPwd="+uPwd;
      if(uName.length>18||uName.length<6)
        {
            alert("长度不正确")
        }
        else
        {
          localStorage['uToken']=res.data.token
            this.$axios.get(url).then((res)=>{
                alert('注册成功')
                this.$router.push('/')
            })
        }
      
    }
    //自定义事件
    /*
    test(){
       this.axios.get("http://localhost:8888/vue/demo1/api/test.php")
       .then((res)=>{
          console.log(res.data)
          this.arr = res.data;

       })
    }
    */
  }
      
}
</script>
 <style>
 </style>
