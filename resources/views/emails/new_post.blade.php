<div class="email">

   <div class="email-content">

    <div class="header">
        <h2>{{ $post->titre }}</h2>
    </div>

    <div class="content">

        <div class="image">
            <img src="{{url('/images/' . basename($post->photo))}}" alt="">
        </div>

        <div class="description">
            {{$post->description}}
        </div>

        <div class="bouton">
            <a href="https://ccdbassila.com/post/{{$post->id}}" target="_blank">Voir plus</a>
        </div>
    </div>

    <div class="footer">

        <div class="mail">
            <a href="mailto:ccdbassila@gmail.com">Mail</a>
        </div>

        <div class="tel">
            <a href="tel:+33652849181">Tel</a>
        </div>

    </div>

   </div>
</div>

<style>
    .email{
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .email-content{
        background: whitesmoke;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        margin: 10px;
        padding: 30px;
        max-width: 50vw;
    }
    .header {
        width: 100%;
        text-align: center;
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        margin-bottom: 15px;
    }
    .content {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        margin-bottom: 15px;

    }
    .image{
        object-fit: cover;
        object-position: center;
        width: 200px;
        height: 200px;
        margin: 10px;
    }
    .image img{
        object-fit: cover;
        object-position: center;
        width: 100%;
        height: 100%;
    }
    .description {
        text-align: center;
        margin: 20px;

    }
    .bouton {
        width: 100%;
        display: flex;
        justify-content: center;
    }
    .bouton a {
        width: fit-content;
        height: fit-content;
        padding: 10px;
        border-radius: 2px;
        font-weight: bold;
        color: white;
        background: #92f2c4;
        border: 0;
        text-decoration: none;
    }
    .bouton a:hover{
        cursor: pointer;
        background: #45775f;
    }
    .footer{
        border-top: rgba(0, 0, 0, 0.5) 1px solid; 
        padding-top: 30px;
        display: flex;
        justify-content: space-around;
        width: 100%;
    }
    a {
        color: #92f2c4;
        text-decoration: none;

    }
     
 
</style>