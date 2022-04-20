<?php

namespace Database\Seeders;

use App\Models\Song;
use Illuminate\Database\Seeder;

class SongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $song = new Song();
        $song->name = 'Nam Lay Tay Anh';

        $song->singer_id = '1';
        $song->category_id = '1';
        $song->author_id = '1';
        $song->album_id = '1';
        $song->user_id = '1';
        $song->link = 'https://firebasestorage.googleapis.com/v0/b/pro1-d366b.appspot.com/o/RoomsImages%2F1650333474060?alt=media&token=6ccf3690-9d09-4116-ba02-d1051595fa19';
        $song->description = 'Nam chat vao nhe';
        $song->save();

        $song = new Song();
        $song->name = 'Muon roi ma sao con';
        $song->link = 'https://firebasestorage.googleapis.com/v0/b/pro1-d366b.appspot.com/o/RoomsImages%2F1650335327710?alt=media&token=b2faf971-61a0-40a2-aec1-515ad7381551';
        $song->singer_id = 1;
        $song->category_id = 1;
        $song->author_id = 1;
        $song->album_id = 1;
        $song->user_id = 1;
        $song->description = 'Ngày ta sánh đôi hạnh phúc nói cười
        Thì em yêu ơi xin em hãy cứ tin
        Nắm tay nhau thật chặt giữ tay nhau thật lâu (ta-da)
        Để hứa với nhau một câu sẽ đi trọn tới cuối con đường
        Đến khi tim ngừng đập và đôi chân ngừng đi
        Thì đôi ta cũng sẽ không xa rời
        Ngày ta sánh đôi hạnh phúc nói cười
        Chỉ mong thế thôi đến tận cuối cùng
        Từng giây phút trôi ánh mắt rạng ngời
        Cầm tay bước đi tiếng yêu cất lời
        Và anh cám ơn cuộc đời này
        Đã mang em về bên mình để rồi
        Mỗi sớm mai (mỗi sớm mai)
        Khi thức dậy anh nói rằng (khi thức dậy)
        Hãy yêu anh và bên anh người nhé
        Nắm tay anh thật chặt giữ tay anh thật lâu
        Hứa với anh một câu sẽ đi trọn tới cuối con đường (cuối đường)
        Đến khi tim ngừng đập và đôi chân ngừng đi
        Thì em yêu ơi xin em hãy cứ tin
        Nắm tay nhau thật chặt giữ tay nhau thật lâu (ta-da)
        Để hứa với nhau một câu sẽ đi trọn tới cuối con đường (cuối đường)
        Đến khi tim ngừng đập và đôi chân ngừng đi
        Thì đôi ta cũng sẽ không xa rời
        Nắm tay nhau thật chặt giữ tay nhau thật lâu
        Hứa với nhau một câu sẽ đi trọn tới cuối con đường (cuối đường)
        Đến khi tim ngừng đập và đôi chân ngừng đi
        Thì em yêu ơi xin em hãy cứ tin
        Nắm tay nhau thật chặt giữ tay nhau thật lâu (ta-da)
        Hứa với nhau một câu sẽ đi trọn đến cuối con đường (cuối đường)
        Đến khi tim ngừng đập và đôi chân ngừng đi
        Thì đôi ta cũng sẽ không xa rời';
        $song->posting_date = '2000/01/23';
        $song->image = 'data:image/jpeg;base64,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';
        $song->like = 1224;
        $song->view =784236;
        $song->save();

        $song = new Song();
        $song->name = 'Nam Lay Tay Anh 2';
        $song->singer_id = '1';
        $song->category_id = '1';
        $song->author_id = '1';
        $song->album_id = '1';
        $song->user_id = '1';
        $song->link = 'https://firebasestorage.googleapis.com/v0/b/pro1-d366b.appspot.com/o/RoomsImages%2F1650335327710?alt=media&token=b2faf971-61a0-40a2-aec1-515ad7381551';
        $song->description = 'Ngày ta sánh đôi hạnh phúc nói cười
        Thì em yêu ơi xin em hãy cứ tin
        Nắm tay nhau thật chặt giữ tay nhau thật lâu (ta-da)
        Để hứa với nhau một câu sẽ đi trọn tới cuối con đường
        Đến khi tim ngừng đập và đôi chân ngừng đi
        Thì đôi ta cũng sẽ không xa rời
        Ngày ta sánh đôi hạnh phúc nói cười
        Chỉ mong thế thôi đến tận cuối cùng
        Từng giây phút trôi ánh mắt rạng ngời
        Cầm tay bước đi tiếng yêu cất lời
        Và anh cám ơn cuộc đời này
        Đã mang em về bên mình để rồi
        Mỗi sớm mai (mỗi sớm mai)
        Khi thức dậy anh nói rằng (khi thức dậy)
        Hãy yêu anh và bên anh người nhé
        Nắm tay anh thật chặt giữ tay anh thật lâu
        Hứa với anh một câu sẽ đi trọn tới cuối con đường (cuối đường)
        Đến khi tim ngừng đập và đôi chân ngừng đi
        Thì em yêu ơi xin em hãy cứ tin
        Nắm tay nhau thật chặt giữ tay nhau thật lâu (ta-da)
        Để hứa với nhau một câu sẽ đi trọn tới cuối con đường (cuối đường)
        Đến khi tim ngừng đập và đôi chân ngừng đi
        Thì đôi ta cũng sẽ không xa rời
        Nắm tay nhau thật chặt giữ tay nhau thật lâu
        Hứa với nhau một câu sẽ đi trọn tới cuối con đường (cuối đường)
        Đến khi tim ngừng đập và đôi chân ngừng đi
        Thì em yêu ơi xin em hãy cứ tin
        Nắm tay nhau thật chặt giữ tay nhau thật lâu (ta-da)
        Hứa với nhau một câu sẽ đi trọn đến cuối con đường (cuối đường)
        Đến khi tim ngừng đập và đôi chân ngừng đi
        Thì đôi ta cũng sẽ không xa rời';
        $song->like = 1224;
        $song->view =78236;
        $song->posting_date = '2000/01/23';
        $song->image = 'data:image/jpeg;base64,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';

        $song->save();

        $song = new Song();
        $song->name = 'Nam Lay Tay Anh 3';
        $song->singer_id = '1';
        $song->category_id = '1';
        $song->author_id = '1';
        $song->album_id = '1';
        $song->user_id = '1';
        $song->link = 'https://firebasestorage.googleapis.com/v0/b/pro1-d366b.appspot.com/o/RoomsImages%2F1650335340151?alt=media&token=b35842f5-7416-49c0-a467-1669f9b4f35e';
        $song->description = 'Ngày ta sánh đôi hạnh phúc nói cười
        Thì em yêu ơi xin em hãy cứ tin
        Nắm tay nhau thật chặt giữ tay nhau thật lâu (ta-da)
        Để hứa với nhau một câu sẽ đi trọn tới cuối con đường
        Đến khi tim ngừng đập và đôi chân ngừng đi
        Thì đôi ta cũng sẽ không xa rời
        Ngày ta sánh đôi hạnh phúc nói cười
        Chỉ mong thế thôi đến tận cuối cùng
        Từng giây phút trôi ánh mắt rạng ngời
        Cầm tay bước đi tiếng yêu cất lời
        Và anh cám ơn cuộc đời này
        Đã mang em về bên mình để rồi
        Mỗi sớm mai (mỗi sớm mai)
        Khi thức dậy anh nói rằng (khi thức dậy)
        Hãy yêu anh và bên anh người nhé
        Nắm tay anh thật chặt giữ tay anh thật lâu
        Hứa với anh một câu sẽ đi trọn tới cuối con đường (cuối đường)
        Đến khi tim ngừng đập và đôi chân ngừng đi
        Thì em yêu ơi xin em hãy cứ tin
        Nắm tay nhau thật chặt giữ tay nhau thật lâu (ta-da)
        Để hứa với nhau một câu sẽ đi trọn tới cuối con đường (cuối đường)
        Đến khi tim ngừng đập và đôi chân ngừng đi
        Thì đôi ta cũng sẽ không xa rời
        Nắm tay nhau thật chặt giữ tay nhau thật lâu
        Hứa với nhau một câu sẽ đi trọn tới cuối con đường (cuối đường)
        Đến khi tim ngừng đập và đôi chân ngừng đi
        Thì em yêu ơi xin em hãy cứ tin
        Nắm tay nhau thật chặt giữ tay nhau thật lâu (ta-da)
        Hứa với nhau một câu sẽ đi trọn đến cuối con đường (cuối đường)
        Đến khi tim ngừng đập và đôi chân ngừng đi
        Thì đôi ta cũng sẽ không xa rời';
        $song->like = 1224;
        $song->view =7842136;
        $song->posting_date = '2000/02/23';
        $song->image = 'data:image/jpeg;base64,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';

        $song->save();
        $song = new Song();
        $song->name = 'Sau Tat Ca';
        $song->singer_id = '2';
        $song->category_id = '2';
        $song->author_id = '2';
        $song->album_id = '2';
        $song->user_id = '2';
        $song->description = 'minh lai oanh nhau';
        $song->link = 'https://firebasestorage.googleapis.com/v0/b/pro1-d366b.appspot.com/o/RoomsImages%2F1650335327710?alt=media&token=b2faf971-61a0-40a2-aec1-515ad7381551';


        $song->description = 'Sau tất cả mình lại trở về với nhau
        Tựa như chưa bắt đầu
        Tựa như ta vừa mới quen
        Sau tất cả lòng chẳng hề đổi thay
        Từng ngày xa lìa khiến con tim bồi hồi
        Và ta lại gần nhau hơn nữa
        Có những lúc đôi ta giận hờn
        Thầm trách nhau không một ai nói điều gì
        Thời gian cứ chậm lại
        Từng giây phút sao quá dài
        Để khiến anh nhận ra mình cần em hơn
        Tình yêu cứ thế đong đầy trong anh từng ngày
        Vì quá yêu em nên không thể làm gì khác
        Chỉ cần ta mãi luôn dành
        Cho nhau những chân thành
        Mọi khó khăn cũng chỉ là thử thách
        Vì trái tim ta luôn luôn thuộc về nhau
        Uh
        Sau tất cả mình lại chung lối đi
        Đoạn đường ta có nhau
        Bàn tay nắm chặt bấy lâu
        Sau tất cả mình cùng nhau sẻ chia
        Muộn phiền không thể khiến đôi tim nhạt nhoà
        Và ta lại gần nhau hơn nữa
        Có những lúc đôi ta giận hờn
        Thầm trách nhau không một ai nói điều gì
        Thời gian cứ chậm lại
        Từng giây phút sao quá dài
        Để khiến anh nhận ra mình cần em hơn
        Tình yêu cứ thế đong đầy trong anh từng ngày
        Vì quá yêu em nên không thể làm gì khác
        Chỉ cần ta mãi luôn dành cho nhau những chân thành
        Mọi khó khăn cũng chỉ là thử thách
        Vì trái tim ta luôn luôn thuộc về nhau
        Giữ chặt bàn tay
        Mình cùng nhau đi
        Hết bao tháng ngày
        Mọi điều gian khó ta luôn vượt qua
        Để khiến ta nhận ra mình gần nhau hơn
        Tình yêu cứ thế đong đầy trong anh từng ngày
        Vì quá yêu em nên không thể làm gì khác
        Chỉ cần ta mãi luôn dành cho nhau những chân thành
        Mọi khó khăn cũng chỉ là thử thách
        Vì trái tim ta luôn luôn
        Thuộc về nhau
        Uhm';
        $song->like = 1234;
        $song->view =784236;

        $song->posting_date = '2002/01/23';
        $song->image = 'data:image/jpeg;base64,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';


        $song->save();

        $song = new Song();
        $song->name = 'Sau Tat Ca 2';
        $song->singer_id = '2';
        $song->category_id = '2';
        $song->author_id = '2';
        $song->album_id = '2';
        $song->user_id = '2';
        $song->link = 'https://firebasestorage.googleapis.com/v0/b/pro1-d366b.appspot.com/o/RoomsImages%2F1650335340151?alt=media&token=b35842f5-7416-49c0-a467-1669f9b4f35e';

        $song->description = 'Ngày ta sánh đôi hạnh phúc nói cười
        Thì em yêu ơi xin em hãy cứ tin
        Nắm tay nhau thật chặt giữ tay nhau thật lâu (ta-da)
        Để hứa với nhau một câu sẽ đi trọn tới cuối con đường
        Đến khi tim ngừng đập và đôi chân ngừng đi
        Thì đôi ta cũng sẽ không xa rời
        Ngày ta sánh đôi hạnh phúc nói cười
        Chỉ mong thế thôi đến tận cuối cùng
        Từng giây phút trôi ánh mắt rạng ngời
        Cầm tay bước đi tiếng yêu cất lời
        Và anh cám ơn cuộc đời này
        Đã mang em về bên mình để rồi
        Mỗi sớm mai (mỗi sớm mai)
        Khi thức dậy anh nói rằng (khi thức dậy)
        Hãy yêu anh và bên anh người nhé
        Nắm tay anh thật chặt giữ tay anh thật lâu
        Hứa với anh một câu sẽ đi trọn tới cuối con đường (cuối đường)
        Đến khi tim ngừng đập và đôi chân ngừng đi
        Thì em yêu ơi xin em hãy cứ tin
        Nắm tay nhau thật chặt giữ tay nhau thật lâu (ta-da)
        Để hứa với nhau một câu sẽ đi trọn tới cuối con đường (cuối đường)
        Đến khi tim ngừng đập và đôi chân ngừng đi
        Thì đôi ta cũng sẽ không xa rời
        Nắm tay nhau thật chặt giữ tay nhau thật lâu
        Hứa với nhau một câu sẽ đi trọn tới cuối con đường (cuối đường)
        Đến khi tim ngừng đập và đôi chân ngừng đi
        Thì em yêu ơi xin em hãy cứ tin
        Nắm tay nhau thật chặt giữ tay nhau thật lâu (ta-da)
        Hứa với nhau một câu sẽ đi trọn đến cuối con đường (cuối đường)
        Đến khi tim ngừng đập và đôi chân ngừng đi
        Thì đôi ta cũng sẽ không xa rời';
        $song->like = 1244;
        $song->view =784236;
        $song->posting_date = '2002/01/23';
        $song->image = 'data:image/jpeg;base64,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';

        $song->save();
        $song = new Song();
        $song->name = 'Sau Tat Ca 3';
        $song->singer_id = '2';
        $song->category_id = '2';
        $song->author_id = '2';
        $song->album_id = '2';
        $song->user_id = '2';
        $song->link = 'https://firebasestorage.googleapis.com/v0/b/pro1-d366b.appspot.com/o/RoomsImages%2F1650335305092?alt=media&token=a0637f86-43f3-4f99-a58f-09018e6c2b00';
        $song->description = 'Ngày ta sánh đôi hạnh phúc nói cười
        Thì em yêu ơi xin em hãy cứ tin
        Nắm tay nhau thật chặt giữ tay nhau thật lâu (ta-da)
        Để hứa với nhau một câu sẽ đi trọn tới cuối con đường
        Đến khi tim ngừng đập và đôi chân ngừng đi
        Thì đôi ta cũng sẽ không xa rời
        Ngày ta sánh đôi hạnh phúc nói cười
        Chỉ mong thế thôi đến tận cuối cùng
        Từng giây phút trôi ánh mắt rạng ngời
        Cầm tay bước đi tiếng yêu cất lời
        Và anh cám ơn cuộc đời này
        Đã mang em về bên mình để rồi
        Mỗi sớm mai (mỗi sớm mai)
        Khi thức dậy anh nói rằng (khi thức dậy)
        Hãy yêu anh và bên anh người nhé
        Nắm tay anh thật chặt giữ tay anh thật lâu
        Hứa với anh một câu sẽ đi trọn tới cuối con đường (cuối đường)
        Đến khi tim ngừng đập và đôi chân ngừng đi
        Thì em yêu ơi xin em hãy cứ tin
        Nắm tay nhau thật chặt giữ tay nhau thật lâu (ta-da)
        Để hứa với nhau một câu sẽ đi trọn tới cuối con đường (cuối đường)
        Đến khi tim ngừng đập và đôi chân ngừng đi
        Thì đôi ta cũng sẽ không xa rời
        Nắm tay nhau thật chặt giữ tay nhau thật lâu
        Hứa với nhau một câu sẽ đi trọn tới cuối con đường (cuối đường)
        Đến khi tim ngừng đập và đôi chân ngừng đi
        Thì em yêu ơi xin em hãy cứ tin
        Nắm tay nhau thật chặt giữ tay nhau thật lâu (ta-da)
        Hứa với nhau một câu sẽ đi trọn đến cuối con đường (cuối đường)
        Đến khi tim ngừng đập và đôi chân ngừng đi
        Thì đôi ta cũng sẽ không xa rời';
        $song->like = 1224;
        $song->view =7842216;
        $song->posting_date = '2022/01/23';
        $song->image = 'data:image/jpeg;base64,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';

        $song->save();
        $song = new Song();
        $song->name = 'Danh Mat Em';
        $song->singer_id = '3';
        $song->category_id = '3';
        $song->author_id = '3';
        $song->album_id = '3';
        $song->user_id = '3';
        $song->link = 'https://firebasestorage.googleapis.com/v0/b/pro1-d366b.appspot.com/o/RoomsImages%2F1650335327710?alt=media&token=b2faf971-61a0-40a2-aec1-515ad7381551';

        $song->description = 'Chỉ còn anh lang thang chốn cũ
        Lòng quặn đau nước mắt ướt nhoà
        Chẳng thể nào biết được liệu mai sau có thể gặp lại nữa
        Chỉ muốn xoá quá khứ kia đi
        Nhưng không dễ để có thể tập quên
        Rồi cho đến cuối cùng chỉ biết ôm nỗi buồn lặng im
        Làm sao quên được hình bóng ấy
        Thời gian sao có thể xoá nhoà
        Người mà anh đã từng nguyện yêu thương để rồi vụt mất
        Vì đã chẳng cố gắng bên em
        Dành thời gian cho những thứ em chẳng cần
        Giờ đành phải chấp nhận nhìn em hạnh phúc ở bên ai
        Để rồi khi đêm kéo về lòng anh não nề
        Một mình chỉ nghĩ những chuyện về em
        Chẳng thể nào nghĩ được vì sao để đánh mất được em
        Dù cho anh có phải chờ anh có phải đợi
        Thì anh cũng sẽ chỉ đợi mình em
        Thời gian quay trở lại người anh yêu vẫn chỉ là em
        Làm sao quên được hình bóng ấy
        Thời gian sao có thể xoá nhoà
        Người mà anh đã từng nguyện yêu thương để rồi vụt mất
        Vì đã chẳng cố gắng bên em
        Dành thời gian cho những thứ em chẳng cần
        Giờ đành phải chấp nhận nhìn em hạnh phúc ở bên ai
        Để rồi khi đêm kéo về lòng anh não nề
        Một mình chỉ nghĩ những chuyện về em
        Chẳng thể nào nghĩ được vì sao để đánh mất được em
        Dù cho anh có phải chờ anh có phải đợi
        Thì anh cũng sẽ chỉ đợi mình em
        Thời gian quay trở lại người anh yêu vẫn chỉ là em
        Để rồi khi đêm kéo về lòng anh não nề
        Một mình chỉ nghĩ những chuyện về em
        Chẳng thể nào nghĩ được vì sao để đánh mất được em
        Dù cho anh có phải chờ anh có phải đợi
        Thì anh cũng sẽ chỉ đợi mình em
        Thời gian quay trở lại người anh yêu vẫn chỉ là em';
        $song->like = 1234;
        $song->view =783236;
        $song->posting_date = '2022/01/23';
        $song->image = 'data:image/jpeg;base64,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';

        $song->save();
        $song = new Song();
        $song->name = 'Baby shark';
        $song->singer_id = '3';
        $song->category_id = '3';
        $song->author_id = '3';
        $song->album_id = '3';
        $song->user_id = '3';
        $song->link = 'https://firebasestorage.googleapis.com/v0/b/pro1-d366b.appspot.com/o/RoomsImages%2F1650335340151?alt=media&token=b35842f5-7416-49c0-a467-1669f9b4f35e';

        $song->description = '아기 상어 뚜루루 뚜루
        귀여운 뚜루루 뚜루
        바닷속 뚜루루 뚜루
        아기 상어!
        엄마 상어 뚜루루 뚜루
        어여쁜 뚜루루 뚜루
        바닷속 뚜루루 뚜루
        엄마 상어!
        아빠 상어 뚜루루 뚜루
        힘이 센 뚜루루 뚜루
        바닷속 뚜루루 뚜루
        아빠 상어!
        할머니 상어 (뚜루루 뚜루)
        자상한 (뚜루루 뚜루)
        바닷속 뚜루루 뚜루
        할머니 상어!
        할아버지 상어 (뚜루루 뚜루)
        멋있는 (뚜루루 뚜루)
        바닷속 뚜루루 뚜루
        할아버지 상어!
        우리는 뚜루루 뚜루
        바다의 뚜루루 뚜루
        사냥꾼 뚜루루 뚜루
        상어 가족!
        상어다 뚜루루 뚜루
        도망쳐 뚜루루 뚜루
        도망쳐 뚜루루 뚜루
        숨자! 으악!
        살았다 뚜루루 뚜루
        살았다 뚜루루 뚜루
        오늘도 뚜루루 뚜루
        살았다 휴!
        신난다 (뚜루루 뚜루)
        신난다 (뚜루루 뚜루)
        춤을 춰 뚜루루 뚜루
        노래 끝! 오예!';
        $song->like = 134;
        $song->view =783246;
        $song->posting_date = '2003/01/23';
        $song->image = 'data:image/jpeg;base64,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';

        $song->save();
        $song = new Song();
        $song->name = 'Five Little Ducks';
        $song->singer_id = '3';
        $song->category_id = '3';
        $song->author_id = '3';
        $song->album_id = '3';
        $song->user_id = '3';
        $song->link = 'https://firebasestorage.googleapis.com/v0/b/pro1-d366b.appspot.com/o/RoomsImages%2F1650335305092?alt=media&token=a0637f86-43f3-4f99-a58f-09018e6c2b00';

        $song->description = 'Five little ducks went swimming one day
        Over the hills and far away
        The little duck said, "Quack, quack, quack, quack"
        And only four little ducks came back
        Four little ducks went swimming one day
        Over the hills and far away
        The little duck said, "Quack, quack, quack, quack"
        And only three little ducks came back
        Three little ducks went swimming one day
        Over the hills and far away
        The little duck said, "Quack, quack, quack, quack"
        And only two little ducks came back
        Two little ducks went swimming one day
        Over the hills and far away
        The little duck said, "Quack, quack, quack, quack"
        And only one little duck came back
        One little duck went swimming one day
        Over the hills and far away
        The little duck said, "Quack, quack, quack, quack"
        And then no more little ducks came back';
        $song->like = 1224;
        $song->view =783636;
        $song->posting_date = '2022/01/23';
        $song->image = 'data:image/jpeg;base64,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';

        $song->save();
        $song = new Song();
        $song->name = 'aBoy';
        $song->singer_id = '3';
        $song->category_id = '3';
        $song->author_id = '3';
        $song->album_id = '3';
        $song->user_id = '3';
        $song->link = 'https://firebasestorage.googleapis.com/v0/b/pro1-d366b.appspot.com/o/RoomsImages%2F1650335340151?alt=media&token=b35842f5-7416-49c0-a467-1669f9b4f35e';

        $song->description = 'A-yo Choice drop it on me
        Yo 밤은 깊었는데 잠은 안오고
        늘어난 두통과 싸우고
        이리저리 뒤척이다 생각에 잠겨
        또 펜을 붙잡고
        빼곡히 써 내려가는 가사
        이 안에 내 철학이 가득하다
        뿌연 담배 연기 꽉 찬 내방
        Home sweet home 아늑하다';
        $song->like = 1234;
        $song->view =783231;
        $song->posting_date = '2022/01/23';
        $song->image = 'data:image/jpeg;base64,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';

        $song->save();
        $song = new Song();
        $song->name = 'baby';
        $song->singer_id = '3';
        $song->category_id = '3';
        $song->author_id = '3';
        $song->album_id = '3';
        $song->user_id = '3';
        $song->link = 'https://firebasestorage.googleapis.com/v0/b/pro1-d366b.appspot.com/o/RoomsImages%2F1650335305092?alt=media&token=a0637f86-43f3-4f99-a58f-09018e6c2b00';

        $song->description = 'Oh whoa, oh whoa, oh whoa
        You know you love me, I know you care
        Just shout whenever and Ill be there
        You want my love, you want my heart
        And we will never, ever, ever be apart
        Are we an item? Girl, quit playin';
        $song->like = 1234;
        $song->view =783236;
        $song->posting_date = '2022/03/23';
        $song->image = 'data:image/jpeg;base64,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';

        $song->save();
        $song = new Song();
        $song->name = 'Người Ơi Người Ở Đừng Về';
        $song->singer_id = '3';
        $song->category_id = '3';
        $song->author_id = '3';
        $song->album_id = '3';
        $song->user_id = '3';
        $song->link = 'https://firebasestorage.googleapis.com/v0/b/pro1-d366b.appspot.com/o/RoomsImages%2F1650335327710?alt=media&token=b2faf971-61a0-40a2-aec1-515ad7381551';

        $song->description = 'Lâu nay chưa gặp nhau đấy
        Hay ta quên số nhau vậy?
        Nghe đâu lúc này bận lắm
        Chẳng đi chơi, chẳng đi chơi nhiều
        Nhân đây chưa kịp ăn tối
        Hôm nay cuối tuần rồi
        Sao ta không gặp nhau
        Cả lũ đi chơi, rủ đi chơi
        Mình sẽ xuống phố rộn ràng, ngồi ăn bánh xong uống trà
        Dẹp hết mấy thứ mệt nhoài làm u ám bao ngày qua
        Đừng cứ kiếm cớ đòi về, cuộc vui vẫn chưa xong mà
        Mình còn tăng hai
        Và còn tăng ba
        Đừng về trước nha
        Người ơi, người ở í a đừng về
        Làm sao, làm sao để vui một khi vắng đi một người
        Người ơi, người ở í a đừng về
        Lâu lâu mới vui như vậy, bao lâu mới gặp lại đây
        Người ở đừng về
        Hi!
        Alo alo alo alo
        Bao nhiêu lâu chưa gặp
        Ra đây chơi đi, yes or no?
        Bây giờ n-sao nà
        Em đang làm gì đấy?
        Ra đây công viên có đâu mà lâu, khoác cái áo, phi xuống lầu nà
        Ok, hai mươi cứ cho là mau (alo alo)
        Loay hoay lâu nay thấy đâu mặt nhau (ô ai kia)
        Đừng bao giờ nghĩ là vui sau
        Ra đây mà chơi với tui mau
        Thay vì nằm nhà mà coi troll
        Cả tuần làm việc rồi mới cần ra đây ngồi
        Tới khuya, trân châu, mồi
        Tía lia không cần vội, ối a
        Thì đấy
        Đôi khi ta không ra ngoài
        Chỉ để nhìn mặt nhau, ta nhìn đâu? Ta nhìn phone, pose, selfie
        Rồi đấy
        Đôi khi ta không mua vài
        Ly cà phê tán dóc rồi về đâu? Về lòng nhau trong lâu dài
        Mình sẽ xuống phố rộn ràng, ngồi ăn bánh xong uống trà
        Dẹp hết mấy thứ mệt nhoài làm u ám bao ngày qua
        Đừng cứ kiếm cớ đòi về, cuộc vui vẫn chưa xong mà
        Mình còn tăng hai
        Và còn tăng ba
        Đừng về trước nha
        Người ơi, người ở í a đừng về
        Làm sao, làm sao để vui một khi vắng đi một người
        Người ơi, người ở í a đừng về
        Lâu lâu mới vui như vậy, bao lâu mới gặp lại đây?
        Người ở đừng về
        Người ơi, người ở í a đừng về
        Làm sao, làm sao để vui một khi vắng đi một người
        Người ơi, người ở í a đừng về
        Lâu lâu mới vui như vậy, bao lâu mới gặp lại đây?
        Người ở tôi về';
        $song->like = 1234;
        $song->view =783236;
        $song->posting_date = '2022/02/23';
        $song->image = 'data:image/jpeg;base64,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';

        $song->save();
        $song = new Song();
        $song->name = 'mưa';
        $song->singer_id = '3';
        $song->category_id = '3';
        $song->author_id = '3';
        $song->album_id = '3';
        $song->user_id = '3';
        $song->link = 'https://firebasestorage.googleapis.com/v0/b/pro1-d366b.appspot.com/o/RoomsImages%2F1650335340151?alt=media&token=b35842f5-7416-49c0-a467-1669f9b4f35e';

        $song->description = 'Chiều nay trên phố chợt có cơn mưa bay
        Giọt mưa vội vã nhẹ rơi mắt người
        Mưa có vui như em và anh
        Và mưa vẫn thế nhẹ lắm khi bên anh
        Vì mưa cũng biết từ trong tim này
        Mưa với anh tới sao ngọt ngào
        Lắng nghe mưa thầm hát
        Từng giọt thấm ướt vai em
        Mà lòng thấy ấm bên anh
        Mỗi lúc bên nhau dưới mưa nồng nàn (hah)
        Có chăng là một thoáng
        Một lần hát khẽ bên em
        Rằng trọn cuộc đời này sẽ mãi
        Chẳng một lần cách xa nhau
        Mưa vẫn thế khi mãi bên nhau
        Mưa vẫn hát trên tóc em dịu dàng
        Mưa khóc lạnh lùng
        Khi buồn và nhớ thương em rất nhiều (nhớ em rất nhiều)
        Mưa có biết đợi chờ nhớ mong
        Mưa có thấy vòng tay đón em mỗi lần
        Mưa có trên làn môi em run có nhau
        Trong chiều mưa (trong chiều mưa)
        Mình tay trong tay
        Lắng nghe mưa thầm hát
        Từng giọt thấm ướt vai em
        Mà lòng thấy ấm bên anh
        Mỗi lúc bên nhau dưới mưa nồng nàn (hah)
        Có chăng là một thoáng
        Một lần hát khẽ bên em
        Rằng trọn cuộc đời này sẽ mãi
        Chẳng một lần cách xa nhau
        Mưa vẫn thế khi mãi bên nhau
        Mưa vẫn hát trên tóc em dịu dàng
        Mưa khóc lạnh lùng
        Khi buồn và nhớ thương em rất nhiều
        Mưa có biết đợi chờ nhớ mong
        Mưa có thấy vòng tay đón em mỗi lần
        Mưa có trên làn môi em run có nhau
        Trong chiều mưa (trong chiều mưa)
        Mình tay trong tay
        Hah hah hah
        Mưa vẫn thế khi mãi bên nhau (vẫn thế khi mãi bên nhau)
        Mưa vẫn hát trên tóc em dịu dàng (tóc em dịu dàng)
        Mưa vẫn khóc lạnh lùng
        Khi buồn và nhớ thương em rất nhiều (từng giọt mưa trong em mong nhớ hah)
        Mưa có biết đợi chờ nhớ mong (mưa có thấy em đang buồn)
        Mưa có thấy vòng tay đón em mỗi lần (vòng tay ấm êm)
        Mưa có trên làn môi em run có nhau
        Trong chiều mưa (xa mãi)
        Mình tay trong tay
        Mưa có trên làn môi em run có nhau
        Trong chiều mưa
        Mình tay trong tay';
        $song->like = 1234;
        $song->view =783236;
        $song->posting_date = '2022/01/23';
        $song->image = 'data:image/jpeg;base64,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';

        $song->save();
        $song = new Song();
        $song->name = 'Năm anh em trên một chiếc xe tăng';
        $song->singer_id = '2';
        $song->category_id = '3';
        $song->author_id = '2';
        $song->album_id = '2';
        $song->user_id = '2';
        $song->link = 'https://firebasestorage.googleapis.com/v0/b/pro1-d366b.appspot.com/o/RoomsImages%2F1650335305092?alt=media&token=a0637f86-43f3-4f99-a58f-09018e6c2b00';

        $song->description = 'Năm anh em trên một chiếc xe tăng
        Như năm bông hoa nở cùng một cội
        Như năm ngón tay trên một bàn tay
        Đã xung trận cả năm người như một
        Vào lính xe tăng anh trước anh sau
        Cái nết ở anh mỗi người một tính
        Nhưng khi hát ta hoà cùng một nhịp
        Một người đau ta tất cả quên ăn
        Năm anh em mỗi đứa một quê
        Đã lên xe ấy là cùng một hướng
        Nổ máy lên ta một dạ xung phong
        Trước quân thù lòng chỉ biết có tiến công
        Năm anh em ta có năm cái tên
        Ấy khi lên xe không còn tên riêng nữa
        Trên tháp pháo một ngôi sao màu lửa
        Năm quả tim chung nhịp đập rộn ràng
        Một con đường đất đỏ như son
        Một màu rừng xanh bạt ngàn hi vọng
        Một ý chí bay qua đầu ngọn súng
        Một niềm tin quyết thắng trong trận này.';
        $song->like = 1234;
        $song->view =783236;

        $song->posting_date = '2022/01/03';
        $song->image = 'data:image/jpeg;base64,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';

        $song->save();
        $song = new Song();
        $song->name = 'Nàng thơ';
        $song->singer_id = '2';
        $song->category_id = '2';
        $song->author_id = '2';
        $song->album_id = '2';
        $song->user_id = '3';
        $song->link = 'https://firebasestorage.googleapis.com/v0/b/pro1-d366b.appspot.com/o/RoomsImages%2F1650335327710?alt=media&token=b2faf971-61a0-40a2-aec1-515ad7381551';

        $song->description = 'Em, ngày em đánh rơi nụ cười vào anh
        Có nghĩ sau này em sẽ chờ
        Và vô tư cho đi hết những ngây thơ
        Anh, một người hát mãi những điều mong manh
        Lang thang tìm niềm vui đã lỡ
        Chẳng buồn dặn lòng quên hết những chơ vơ
        Ta yêu nhau bằng nỗi nhớ chưa khô trên những bức thư
        Ta đâu bao giờ có lỗi khi không nghe tim chối từ
        Chỉ tiếc rằng
        Em không là nàng thơ
        Anh cũng không còn là nhạc sĩ mộng mơ
        Tình này nhẹ như gió
        Lại trĩu lên tim ta những vết hằn
        Tiếng yêu này mỏng manh
        Giờ tan vỡ, thôi cũng đành
        Xếp riêng những ngày tháng hồn nhiên
        Trả lại...
        Mai, rồi em sẽ quên ngày mình khờ dại
        Mong em kỷ niệm này cất lại
        Mong em ngày buồn thôi ướt đẫm trên vai
        Mai, ngày em sải bước bên đời thênh thang
        Chỉ cần một điều em hãy nhớ
        Có một người từng yêu em tha thiết vô bờ
        Em không là nàng thơ
        Anh cũng không còn là nhạc sĩ mộng mơ
        Tình này nhẹ như gió
        Lại trĩu lên tim ta những vết hằn
        Tiếng yêu này mỏng manh
        Giờ tan vỡ, thôi cũng đành
        Xếp riêng những ngày tháng hồn nhiên
        Trả hết cho em
        Em không là nàng thơ
        Anh cũng không còn là nhạc sĩ mộng mơ
        Tình này nhẹ như gió
        Lại trĩu lên tim ta những vết hằn
        Tiếng yêu này mỏng manh
        Giờ tan vỡ, thôi cũng đành
        Xếp riêng những ngày tháng hồn nhiên
        Trả hết cho em';
        $song->like = 1234;
        $song->view =783236;
        $song->posting_date = '2001/01/23';
        $song->image = 'data:image/jpeg;base64,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';
        $song->save();

        $song = new Song();
        $song->name = 'Một Đêm Say';
        $song->singer_id = '1';
        $song->category_id = '1';
        $song->author_id = '1';
        $song->album_id = '1';
        $song->user_id = '1';
        $song->link = 'https://firebasestorage.googleapis.com/v0/b/pro1-d366b.appspot.com/o/RoomsImages%2F1650335340151?alt=media&token=b35842f5-7416-49c0-a467-1669f9b4f35e';

        $song->description = 'Khi đôi môi em còn đỏ mọng
        Em muốn nói em yêu anh
        Khi men còn trong hơi thở
        Lại gần hôn anh đi
        Khi con tim không còn trên đầu
        Khi hai má em hây hây
        Em nói em say tiếng đàn
        Vậy lại gần hôn anh đi
        Lại gần hôn anh
        Anh sẽ để em mặt trời
        Lại gần hôn anh
        Hay em để anh chơi vơi
        Giờ còn đôi ta
        Kia là núi đây là nhà
        Giờ còn đôi ta
        Em có muốn đi thật xa
        Ta chỉ sống một lần trên đời
        Suy nghĩ lắm chi em ơi
        Bao nhiêu yêu thương trên đời
        Thành vị ngọt trên đôi môi
        Lại gần hôn anh
        Anh sẽ để em mặt trời
        Lại gần hôn anh
        Hay em để anh chơi vơi
        Giờ còn đôi ta
        Kia là núi đây là nhà
        Giờ còn đôi ta
        Em có muốn đi thật xa
        Lại gần hôn anh
        Anh sẽ để em mặt trời
        Lại gần hôn anh
        Hay em để anh chơi vơi
        Giờ còn đôi ta
        Kia là núi đây là nhà
        Giờ còn đôi ta
        Em có muốn đi thật xa
        Khi đôi môi em còn đỏ mọng
        Em muốn nói em yêu anh
        Khi men còn trong hơi thở
        Lại gần hôn anh đi
        Khi đôi môi em còn đỏ mọng
        Khi anh nói anh yêu em
        Khi anh ta còn say giấc nồng
        Lại gần hôn anh đi';
        $song->like = 1234;
        $song->view =783236;
        $song->posting_date = '2022/01/23';
        $song->image = 'data:image/jpeg;base64,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';

        $song->save();
        $song = new Song();
        $song->name = 'Danh Mat Em 2';
        $song->singer_id = '3';
        $song->category_id = '3';
        $song->author_id = '3';
        $song->album_id = '3';
        $song->user_id = '3';
        $song->link = 'https://firebasestorage.googleapis.com/v0/b/pro1-d366b.appspot.com/o/RoomsImages%2F1650335340151?alt=media&token=b35842f5-7416-49c0-a467-1669f9b4f35e';

        $song->description = 'Ngày ta sánh đôi hạnh phúc nói cười
        Thì em yêu ơi xin em hãy cứ tin
        Nắm tay nhau thật chặt giữ tay nhau thật lâu (ta-da)
        Để hứa với nhau một câu sẽ đi trọn tới cuối con đường
        Đến khi tim ngừng đập và đôi chân ngừng đi
        Thì đôi ta cũng sẽ không xa rời
        Ngày ta sánh đôi hạnh phúc nói cười
        Chỉ mong thế thôi đến tận cuối cùng
        Từng giây phút trôi ánh mắt rạng ngời
        Cầm tay bước đi tiếng yêu cất lời
        Và anh cám ơn cuộc đời này
        Đã mang em về bên mình để rồi
        Mỗi sớm mai (mỗi sớm mai)
        Khi thức dậy anh nói rằng (khi thức dậy)
        Hãy yêu anh và bên anh người nhé
        Nắm tay anh thật chặt giữ tay anh thật lâu
        Hứa với anh một câu sẽ đi trọn tới cuối con đường (cuối đường)
        Đến khi tim ngừng đập và đôi chân ngừng đi
        Thì em yêu ơi xin em hãy cứ tin
        Nắm tay nhau thật chặt giữ tay nhau thật lâu (ta-da)
        Để hứa với nhau một câu sẽ đi trọn tới cuối con đường (cuối đường)
        Đến khi tim ngừng đập và đôi chân ngừng đi
        Thì đôi ta cũng sẽ không xa rời
        Nắm tay nhau thật chặt giữ tay nhau thật lâu
        Hứa với nhau một câu sẽ đi trọn tới cuối con đường (cuối đường)
        Đến khi tim ngừng đập và đôi chân ngừng đi
        Thì em yêu ơi xin em hãy cứ tin
        Nắm tay nhau thật chặt giữ tay nhau thật lâu (ta-da)
        Hứa với nhau một câu sẽ đi trọn đến cuối con đường (cuối đường)
        Đến khi tim ngừng đập và đôi chân ngừng đi
        Thì đôi ta cũng sẽ không xa rời';
        $song->like = 1224;
        $song->view =784536;
        $song->posting_date = '2002/01/23';
        $song->image = 'data:image/jpeg;base64,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';

        $song->save();
        $song = new Song();
        $song->name = 'Danh Mat Em 3';
        $song->singer_id = '3';
        $song->category_id = '3';
        $song->author_id = '3';
        $song->album_id = '3';
        $song->user_id = '3';
        $song->link = 'https://firebasestorage.googleapis.com/v0/b/pro1-d366b.appspot.com/o/RoomsImages%2F1650335327710?alt=media&token=b2faf971-61a0-40a2-aec1-515ad7381551';

        $song->description = 'Ngày ta sánh đôi hạnh phúc nói cười
        Thì em yêu ơi xin em hãy cứ tin
        Nắm tay nhau thật chặt giữ tay nhau thật lâu (ta-da)
        Để hứa với nhau một câu sẽ đi trọn tới cuối con đường
        Đến khi tim ngừng đập và đôi chân ngừng đi
        Thì đôi ta cũng sẽ không xa rời
        Ngày ta sánh đôi hạnh phúc nói cười
        Chỉ mong thế thôi đến tận cuối cùng
        Từng giây phút trôi ánh mắt rạng ngời
        Cầm tay bước đi tiếng yêu cất lời
        Và anh cám ơn cuộc đời này
        Đã mang em về bên mình để rồi
        Mỗi sớm mai (mỗi sớm mai)
        Khi thức dậy anh nói rằng (khi thức dậy)
        Hãy yêu anh và bên anh người nhé
        Nắm tay anh thật chặt giữ tay anh thật lâu
        Hứa với anh một câu sẽ đi trọn tới cuối con đường (cuối đường)
        Đến khi tim ngừng đập và đôi chân ngừng đi
        Thì em yêu ơi xin em hãy cứ tin
        Nắm tay nhau thật chặt giữ tay nhau thật lâu (ta-da)
        Để hứa với nhau một câu sẽ đi trọn tới cuối con đường (cuối đường)
        Đến khi tim ngừng đập và đôi chân ngừng đi
        Thì đôi ta cũng sẽ không xa rời
        Nắm tay nhau thật chặt giữ tay nhau thật lâu
        Hứa với nhau một câu sẽ đi trọn tới cuối con đường (cuối đường)
        Đến khi tim ngừng đập và đôi chân ngừng đi
        Thì em yêu ơi xin em hãy cứ tin
        Nắm tay nhau thật chặt giữ tay nhau thật lâu (ta-da)
        Hứa với nhau một câu sẽ đi trọn đến cuối con đường (cuối đường)
        Đến khi tim ngừng đập và đôi chân ngừng đi
        Thì đôi ta cũng sẽ không xa rời';
        $song->like = 13224;
        $song->view =72236;
        $song->posting_date = '2001/02/23';
        $song->image = 'data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxETEBAPEQ4QEg8QDxIPEA8PDRAQEA8SFREXFhURFxYYHSggGBolGxMYITEhJSkrLi4uFx8zODMsNygtLisBCgoKDg0OGxAQGi0fHx0tLS0tKy0tLS0tLS0rLS0tLSstLS0rLS0tLSstLTctLS0rLSsrLS0tLSstNysrKys3N//AABEIAOEA4QMBIgACEQEDEQH/xAAbAAEAAgMBAQAAAAAAAAAAAAAAAwUBBAYCB//EADQQAQEAAQIEBAMHAgcBAAAAAAABAgMRBAUhMRJBUXEiMmFSgZGhscHR4fATFSNCYnLxBv/EABgBAQADAQAAAAAAAAAAAAAAAAABAgME/8QAHhEBAQEBAAIDAQEAAAAAAAAAAAECEQMxEiFBMnH/2gAMAwEAAhEDEQA/APoQDtYgAAAAAAAAAAJeG0LnlMJtvfO+SO8EQsdTgNPG+G68mX1x6T369Gvr8FljPFLM8PtYXeT3RNyp5WsAsgAAAAAAAAAAAAAAAAAAAAAAE3CcPc8pjJdvOzynqu+F5bhh1+bL1y8vaKa3MpmeqvhOWZ59b8OPrZ1vtFlo8qxxsymWfill33n8LAYXyaq8zI05wE+LfPPbLK5XGZbTr7JtDhsMJZjjJL3+qYV7U8VfGcplviwsxv2b8v8ARUa+jlhdsptf19nVoeJ4fHOeHKdPL1nsvnyWe0XLlhs8fwl08tu+N+W+v092s6JeswBIAAAAAAAAAAAAAAAAM4422STe27SMLHkmjvncr2wnT3qurydJOrXgOGmnhMfPvlfWtkHJ3rYAAAAABDxfDzPG437r6X1cxq6dxyuN7y7V1qo57odMdSd/ly/a/wB+rXx65eK6inAdDMAAAAAAAAAAAAAAAAdBybR8OnL55Xxfd5KjgOFuplt/tnzX9nS4zabTtOkYeXX4vmfrIDFcAAAAAAaPOZ/pZe+P6t5r8do+PTyxnezp7zrEz2i+nMBZ5XvOmw7GQAAAAAAAAAAAAAAACbhLfHhN7tc5036d3URyWOW1lneXeOq0NTxY45TtZKw80/V8JAGK4AAAAAAxWVfzPiMtPLTzl+HrMsfK9vzTJ36KqeO1/Fld9OY5y7ZWXvt9Gsk4nOXPPKdrlbPxRurM5GNAFgAAAAAAAAAAAAAAX3LdfHHS05ldrlbjj9etUJb+XSK6z8ky8deKrk/G3L4MrvZN8b6z0Wrls5eNJegCEgAAI9fVmONyyvSA92qTnfES5TCf7e/vfJBr8wyyzmXljv4MfKX1+tadvne9b48fL2s9a6ANlQAAAAAAAAAAAAAAAAAEnD61wymU7zfv9Zs3uU8XZnZll0z3u9vbKdd2eD5T4sZllltLN5JOuzb0+T6cu9uWX0tm35Mt6x6WkqwlZBztAHnUxtlku19Z3gPOvr44Y3LK9J+N+kU3NuMmcwmN6dbZ2u/1e+M5ZqW7+Px/9rtZ+zzp8myvfPGfSS1rn4z76peqwS8Vw9wyuN95Z5xE3l6oAJAAAAAAAAAAAAATaPD3LHPKX5JLt6zzQo6ACQX/AAfLMJjLlJllZ137T6bKrl3D3PUx6dMbMsvaV0rDy6/IvmEgDFcAAAAABW8z4DLUyxyxs6Ta72zz6KjieFywsmU79rLvK6lp804fx6d9cfin3d5+DTHks+ldZc4A6WYAAAAAAAAADOEm837bze+k3bHG8HdOzzxvy5Tzay25br454XQz9PhvrPT3imrZ9piDkuX+pcb2yws/v82pxGn4c8sfS2fd5J5o56erjNrbMt5tPmn/AI2eeaHXHUnazw338v7+iOz5f6c+lWCbgtLxamOPlbvfadavbxC95Zw/g059rL4sv4bjDLkt62gAgAAAAAAGKyA5XieHywu2U29Nu1n0RL3nmlvhMvPG/len8KKT6fXo6sa7OsrOUAXQAAAAAAAAPehhbnjjLtblJL6fV4TcHreDPHLyl6+17ovojp8Jdpvd7t1u22/1Y1dOZSzKby95XqVlxtlTnyaeOWXbDznn7SrLHQxll8M3k2l27T0SCbq32jgAhIAAAAAAAAADxracyxuN7WbVWcZ4NHTuGPz5zbe99vO1bKHneltqTLyyn5zp/C/j+7xXSuAdTMAAAAAAAAAB1HA23Twt7+GfoneNLHaSekk/CPbiraAAAAAAAAAAAAAADU5nw/j07J80+LH39G2xUy8vSuRG1zLR8OplPK/FPv8A67tV1y9jEASAAAAAADOPee7ADroy1uX6/j08b57bX3jZcVnGwAAAAAAAAAAAAAAACo5/pfJn7439Z+6nXvPM5/hyedym33KJ0+L+WWvYA0QAAAAAAAAsOS6+2fg8s/ysndfuZ5bltq4X/lt+M2dM5vLPtpj0AM1gAAAAAAAAAAABisoON8X+Hn4btl4btf1BznFauWWduV6y2dO02vaIgdknGIAkAAAAAAAAJfP06rjS51Nviwu/rjZtfxU4rrM17JbF7Oc6f2c/wn8vP+c42yTDK73byUjf5No+LU3vbCeL7+0UvjzJ1aatX8ZBztAAAAAAAAAABVc347aXTxvxXplfSenu9cy5l4d8MOuXa3yx/qo7Wvj8f7VNaAHQoAAAAAAAAAAAALb/AOf76ntj+4M/J/Kc+1yA5moAAAAAAAA859r7UAclAHZGNAEgAAAAAD//2Q==';

        $song->save();


    }
}
