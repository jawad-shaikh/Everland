var idx = getRequest("id");
var i = 0;

console.log("WTF");
$.ajax({
    url:api+'blogHandler.php?type=getSingle',
    type:'Post',
    data:{"idx":idx},
    success:function(resp){
        console.log(resp);
        setBlogSingle(JSON.parse(resp));

        $.ajax({
            url:api+'blogHandler.php?type=getAll',
            type:'get',
            success:function (resp){
                console.log(resp);
                var Json = JSON.parse(resp);
                for(i = 0; i<Json.length;i++){
                    if(Json[i].id != idx+"")
                    relatedBlogs(Json[i]);
                }
            }
        });
    },
    error:(e)=>{console.log(e);}
    
});

function setBlogSingle(blog)
{
    $('#title').html(blog.title);
    $('#desc').html(blog.description);
    $('#blgImg').html(`<img src="./admin/dashboard/${blog.img}" alt="blogthumb" />`);
    $('#time').html(`<strong>Created:</strong> ${blog.created_time}`);
}
function relatedBlogs(blog)
{
    if(i == 0)
    {
        i++;
        var Template = `
            <div class="singleBlog mb-30" blog="${blog.id}" onclick="singleBlogFunc(this)">
                <img src="./admin/dashboard/${blog.img}" alt="">
                <div class="singleBlog__content">
                    <p>
                        ${blog.title}
                    </p>
                </div>
            </div>
            <hr>
        `;
        $('#rel-blog').append(Template);
        return;
    }
    console.log(blog);
    var Template = `
        <div class="b_single pt-30 mb-20" blog="${blog.id}">
            <div class="b_single__thumb">
                <img src="./admin/dashboard/${blog.img}" alt="">
            </div>
            <div class="b_single__content">
                <a href="blog-details.html">${blog.title}</a>
                <span>August 4, 2020</span>
            </div>
        </div>
    `;
    $('#rel-blog').append(Template);
}


function singleBlogFunc(element){
    const lastUrl = element.getAttribute('blog');
    const finalUrl = base+`/blog-details.php?id=${lastUrl}`;
    const img = element.querySelector('img');

    this.addEventListener('mouseover', () => {
        img.classList.add('gray');
        this.classList.add('active');
    })

    this.addEventListener('mouseleave', () => {
        element.classList.add('active');
        this.classList.remove('gray');
    })

    location.assign(finalUrl);
   
}

