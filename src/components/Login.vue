9<template>
    <div id="header">
        <div class="login">
            <input type="text" placeholder="请输入账户" class="ll" v-model="uName"><br>
            <input type="password" placeholder="请输入密码" class="ll" v-model="uPwd"><br>
            <button class="deng" @click="btn()">登录</button>
            <button @click="zou()">立即注册</button>
        </div>
    </div>
</template>
<script>
export default {
  data() {
    return {
      uName: '',
      uPwd:''
    }
  },
  methods:{
      btn(){
          let uName=this.uName
          let uPwd=this.uPwd
          console.log(uName)
          console.log(uPwd)
        //   this.$router.push('/main')
        let url="http://localhost:8888/login/api/log.php?uName="+uName+"&uPwd="+uPwd+"$token="+localStorage["uToken"];
        console.log(url)
        this.$axios.get(url)
        .then((res)=>{
            console.log(res.data)
        })
      },
      zou(){
        //   console.log(123)
        this.$router.push('/zhu')
      }
  }
}
</script>
<style scoped>
.ll
{
    width: 80%;
    height: 40px;
    border-radius: 5px;
    border: none;
    outline: none;
    text-indent: 2em;
    margin-top: 10px;
}
.deng
{
    width: 80%;
    height: 40px;
    background:skyblue;
    outline: none;
    border: none;
    margin-top: 10px;
    border-radius: 5px;
}
#header
{
    width: 100%;
    height: 790px;
    background: skyblue;
    background:url(/123.jpg);
    background-size: 100% 100%;
    margin:0 auto;
    display: flex;
    align-items: center;
    justify-content: center;
}
.login
{
    width: 400px;
    height: 300px;
    background:rgba(0,0,0,0, green, blue, alpha)
}
</style>