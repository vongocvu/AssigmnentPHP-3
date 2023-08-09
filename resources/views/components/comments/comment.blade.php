<div class="">
    <div>
        @foreach ($allComment as $comment)
        <div class="" wire:key="parent-{{ $comment->comment_id }}">
            @if ($comment->level == 1)
            @include('components.comments.card-comment', ['comment' => $comment])

            @foreach ($allComment as $comment_child)
            <div class="ml-[100px]" wire:key="child-{{ $comment_child->comment_id }}">
                @if ($comment_child->level == 2 && $comment_child->comment_parent == $comment->comment_id)
                @include('components.comments.card-comment', ['comment' => $comment_child])
                @endif
            </div>
            @endforeach

            <div class=" ml-[100px]">
                <livewire:comments.input-comment :post_id="$comment->post" :comment_parent="$comment->comment_id"
                    :level=2 :key="$comment->comment_id" />
            </div>
            @endif
        </div>

        @endforeach
    </div>
</div>