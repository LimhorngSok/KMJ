<template>
    {{-- <div class="post-preview">
        <a :href="slug">
            <h2 class="post-title">
                {{ title }}
            </h2>
            <h3 class="post-subtitle">
                {{ subtitle }}
            </h3>
        </a>
        <p class="post-meta">Posted by <a href="#">Admin</a> {{ created_at }}
            <a href="" @click.prevent="likeIt">
                <small>{{ likeCount }}</small>
                <i class="fa fa-thumbs-up" v-if="likeCount == 0" aria-hidden="true"></i>
                <i class="fa fa-thumbs-up" style="color:red" v-else="likeCount > 0 " aria-hidden="true"></i>
            </a>
        </p>
    </div> --}}
    <div class="col blog">
      <img src="img/blog.png" alt="">
      <a href="#" class="date">{{ created_at }}</a>
      <div class="blog-detail">
        <a href="slug" class="d-inline-block">{{ title }}</a>
        <hr class="col-lg-3" align=left>
        <p>{{ subtitle }}</p>
        <div class="row">
          <p class="text-secondary"><i class="fas fa-calendar-alt"></i>[Events]</p>
          <p class="text-secondary">|</p>
          <p class="text-secondary"><i class="fas fa-heart"></i>133 Likes</p>
        </div>
      </div>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                likeCount:0
            }
        },
        props:[
            'title','subtitle','created_at','postId','login','likes','slug'
        ],
        created(){
            this.likeCount = this.likes
        },
        methods:{
            likeIt(){
                if (this.login) {
                    axios.post('/saveLike',{
                        id : this.postId
                    })
                      .then(response => {
                        if (response.data == 'deleted') {
                            this.likeCount -= 1;
                        }else{
                            this.likeCount += 1;
                        }
                        // this.blog = response.data.data
                        // console.log(response);
                      })
                      .catch(function (error) {
                        console.log(error);
                      });
                }else{
                    window.location = 'login'
                }
            }
        }
    }
</script>
