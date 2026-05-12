<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <x-table>
                    <x-slot name="head">
                        <th>Title</th>
                        <th>Author</th>
                        <th>Year</th>
                        <th>Publisher</th>
                        <th>City</th>
                        <th>Cover</th>
                        <th>Bookshelf</th>
                    </x-slot>
                    <x-slot name="body">
                        @foreach ($books as $book)
                            <tr>
                                <td>{{ $book->title }}</td>
                                <td>{{ $book->author }}</td>
                                <td>{{ $book->year }}</td>
                                <td>{{ $book->publisher }}</td>
                                <td>{{ $book->city }}</td>
                                <td>
                                    <img src="{{ asset('storage/cover_buku/'.$book->cover) }}" alt="Cover" width="100px">
                                </td>
                                <td>{{ $book->bookshelf->name}}</td>
                               
                            </tr>
                        @endforeach
                    </x-slot>
                </x-table>
</body>
</html>