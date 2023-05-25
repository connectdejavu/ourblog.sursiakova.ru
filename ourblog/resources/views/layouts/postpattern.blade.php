

<div class="post-container">
        <div class="block-description">
            <div class="description-title">Тема:
            {{$post->topic}}     
                </div>
            <div class="description-post">
                {{$post->description}}
             </div>
                <div class="description-btns-container">
                    <a href='{{ route("blog") }}'><div class="description-btn btn">{{$post->user->name}} </div></a>
                     <div class="description-btn btn">{{$post->likes}}</div>
                     
                     
                </div>
        
        </div>
        
         <div class="block-media">
                <div class="content">
                    {{$post->media}}
                </div>
        </div>
                    
        <div class="block-comment">
            <div class="comments">
                            
            </div>
            <div class="add-comment">
                <textarea name="" class="comment-input" placeholder="Комментарий" id="" cols="1" rows="1"></textarea>
                    
                    <div class="comment-btn btn">
                         Отправить
                    </div>
            </div>
        
        </div>

        
        
    </div>

    
  


    
