<form method="GET" action="{{ route('elements.index') }}">
    {{-- キーワード --}}
    <input type="text" name="keyword" value="{{ request('keyword') }}">

    {{-- 地域 --}}
    <select name="category_id">
        <option value="">すべて</option>
        @foreach ($categories as $category)
            <option value="{{ $category->id }}"
                {{ request('category_id') == $category->id ? 'selected' : '' }}>
                {{ $category->name }}
            </option>
        @endforeach
    </select>

    <button type="submit">検索</button>
</form>
<table>
@foreach ($elements as $element)
    <tr>
        <td>{{ $element->id }}</td>
        <td>{{ $element->name }}</td>
        <td>{{ $element->data }}</td>

        <td>
            @foreach ($element->categories as $category)
                {{ $category->name }}
            @endforeach
        </td>
    </tr>
@endforeach
</table>