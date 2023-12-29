@include('layouts.navigation')  <!-- 引入導引列 -->
<x-app-layout>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">   <!-- 填寫區塊 -->
        <form method="POST" action="{{route('Comment.update')}}">            
            @csrf
            @method('patch')
            <input type="hidden" name="CommentID" value="{{ $commentID }}">                                       
            <label for="Content">編輯留言</label>
            <textarea
                name="Content"
                class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
            >{{ $commentContent }}</textarea>
            <x-input-error :messages="$errors->get('message')" class="mt-2" />
            <div class="mt-4 space-x-2">
                <x-primary-button>{{ __('儲存') }}</x-primary-button>
                <a href="">{{ __('取消') }}</a>
            </div>
        </form>
    </div>
</x-app-layout>