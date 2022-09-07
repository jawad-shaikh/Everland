$.ajax({
    url:api+'blogHandler.php?type=getAll',
    type:'get',
    success:function (resp){
        console.log(resp);
        var Json = JSON.parse(resp);
        for(i = 0; i<Json.length;i++){
            setBlogMini(Json[i]);
        }
    }
});

function setBlogMini(blog)
{
  var blog_template =`  <div class="col-md-4">
                <div class="grid_blog mb-40 text-center">
                    <div class="blog-thumb" style="display:flex; flex-direction:column;">
                        <img src="./admin/dashboard/${blog.img}" alt="">
                        <div class="grid_blog__content">
                            
                            <h2 class="b-title mb-20" style="display:flex;"><a href="blog-details.php?id=${blog.id}">${blog.title}</a></h2>
                            <p style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis;text-align:left;">${blog.description}</p>
                            <div class="post-meta pt-10">
                                <p>Post Date: <span> ${blog.created_time} </span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>`;


    $('#mini-blog').append(blog_template);

    $('.grid_blog__content p').css("text-align", "left");

}