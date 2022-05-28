<?php
    $title = '作品閲覧履歴';
?>

@include('include.header')

    @include('block.title')

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">写真</th>
                    <th scope="col">タイトル</th>
                    <th scope="col">閲覧日</th>
                </tr>
            </thead>
            @for ($i = 0;$i < count($browsehistorydatas['img']);$i++)
                <tbody>
                    <tr>
                        <td><img src="{{ $browsehistorydatas['img'][$i] }}" width="100" height="100"></td>
                        <td>{{ $browsehistorydatas['title'][$i] }}</td>
                        <td>{{ $browsehistorydatas['historydate'][$i] }}</td>
                    </tr>
                </tbody>
            @endfor
        </table>

    @include('block.endtitle')

@include('include.footer')