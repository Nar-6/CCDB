<h4>Commentaires :</h4>
@foreach ($comments as $comment)

    <div class="commentaire">
        <p class="texte">{{$comment->contenu}}</p>
        <p class="created-at">
            @php
                $temps = now()->diffInSeconds($comment->created_at);
                if ($temps > 60) {
                    $temps = now()->diffInMinutes($comment->created_at);
                    if ($temps > 60) {
                        $temps = now()->diffInHours($comment->created_at);
                        if ($temps > 24) {
                            $temps = now()->diffInDays($comment->created_at);
                            if ($temps > 7) {
                            $temps =ceil($temps / 7);
                                if ($temps > 4) {
                                    $temps = now()->diffInDays($comment->created_at);
                                    $temps =ceil($temps / 30.44);
                                    if ($temps > 12) {
                                        $temps = now()->diffInDays($comment->created_at);
                                        $temps =ceil($temps / 365.25);   
                                        echo $temps.' ans';
                                    } else {
                                        echo $temps.' m';
                                    }
                                } else {
                                    echo $temps.' w';
                                }
                            }else {
                                echo $temps.' j';
                            }   
                        }else {
                            echo $temps.' h';
                        }
                    }else {
                        echo $temps.' min';
                    }
                } else {
                    echo $temps.' s';
                }
            @endphp
        </p>
    </div>
    @if ( $comment != $comments->last())
        <div class="barre-container-2">
            <div  class="barre-transparent-2"></div>
        </div>
    @endif
@endforeach