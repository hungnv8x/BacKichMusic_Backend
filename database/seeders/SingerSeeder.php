<?php

namespace Database\Seeders;

use App\Models\Singer;
use Illuminate\Database\Seeder;

class SingerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $singer = new Singer();
        $singer->name = "Thị Nhung";
        $singer->avatar = 'https://nld.mediacdn.vn/291774122806476800/2021/6/19/t03-16240818944771485276009.jpg';
        $singer->gender = 'Nữ';
        $singer->date_of_birth = '2002/02/20';
        $singer->biography = 'CTaylor Alison Swift (sinh ngày 13 tháng 12 năm 1989) là một nữ ca sĩ kiêm sáng tác nhạc người Mỹ. Những đĩa nhạc trải dài trên nhiều thể loại khác nhau và các sáng tác tự sự, thường lấy cảm hứng từ cuộc sống cá nhân của chính cô, đã nhận được sự tán dương rộng rãi của giới truyền thông và giới phê bình. Sinh ra tại West Reading, Pennsylvania, Swift chuyển đến Nashville, Tennessee ở tuổi 14 nhằm theo đuổi sự nghiệp nhạc đồng quê. Cô đã ký hợp đồng sáng tác với Sony/ATV Music Publishing vào năm 2004 và hợp đồng thu âm với Big Machine Records vào năm 2005, đồng thời phát hành album phòng thu đầu tay cùng tên vào năm 2006.';
        $singer->band = 'Hệ chơi một mình';
        $singer->hit = 'Tay em đây nắm chặt vào nhé';
        $singer->information = 'a sĩ hát không nhận ra bài hát cũ. ';
        $singer->category_id = 1;
        $singer->save();

        $singer = new Singer();
        $singer->name = "Minh Béo";
        $singer->avatar = 'https://i.ex-cdn.com/tintucvietnam.vn/files/f1/2019/04/19/minh-beo-la-ai-va-minh-beo-da-co-vo-chua-bb-baaad1n4um.jpg?v=1555646487500';
        $singer->gender = 'Nữ';
        $singer->date_of_birth = '2002/02/20';
        $singer->biography = 'Minh Béo tên khai sinh là Hồng Quang Minh (sinh ngày 27 tháng 12 năm 1977) là người dẫn chương trình và đạo diễn sân khấu người Việt Nam.';
        $singer->band = 'Hệ chơi một mình';
        $singer->hit = 'Gào rú';
        $singer->information = 'Cập nhật sau nhé!';
        $singer->category_id = 2;
        $singer->save();



        $singer = new Singer();
        $singer->name = "Trung Duc";
        $singer->category_id = 2;
        $singer->avatar = 'https://i-giaitri.vnecdn.net/2017/07/31/duc-phuc-10-6670-1501488846_m_460x0.jpg';
        $singer->gender = 'Nam';
        $singer->date_of_birth = '1988/5/16';
        $singer->biography = 'Nguyễn Đức Phúc (sinh ngày 15 tháng 10 năm 1996) là một nam ca sĩ người Việt Nam được biết đến rộng rãi với tư cách quán quân của The Voice Vietnam 2015 (Giọng hát Việt mùa 3)[1].

        Anh từng là sinh viên khoa kiến trúc Trường Đại học Xây dựng vào năm 2014 và sau khi quyết định Nam tiến, theo học khoa Mỹ thuật công nghiệp ở Trường Đại học Văn Lang, sau đó tạm dừng và bảo lưu kết quả học tập để bước vào sự nghiệp âm nhạc.[2]';
        $singer->band = 'Thanh niên làng';
        $singer->hit = 'Nhảy nhạc đám cưới';
        $singer->information = 'Ca sĩ có giọng trầm ấm. ';
        $singer->save();

        $singer = new Singer();
        $singer->name = "Dat Git";
        $singer->category_id = 3;
        $singer->avatar = 'https://i.ytimg.com/vi/ljN7Pv3cnIo/maxresdefault.jpg';
        $singer->gender = 'Nam';
        $singer->date_of_birth = '2000/5/16';
        $singer->biography = 'Ngày/nơi sinh: 14 tháng 7, 1995 (26 tuổi), Hồ Chí Minh
        Tên đầy đủ: Nguyễn Tấn Đạt
        Đề cử: Giải Âm nhạc Cống hiến cho Video âm nhạc của năm, Giải Âm nhạc Cống hiến cho Nghệ sĩ mới của năm';
        $singer->band = 'Thanh niên trẻ con';
        $singer->hit = 'Đá nhau';
        $singer->information = 'Đánh đá gần nhất trung tâm. ';
        $singer->save();

        $singer = new Singer();
        $singer->name = "Tuan Hung";
        $singer->category_id = 4;
        $singer->gender = 'Nam';
        $singer->avatar = 'https://yt3.ggpht.com/ytc/AKedOLRfMNIBilCqYMuSnr9Xy7a1deyh5QpQvxoTlNhSYA=s900-c-k-c0x00ffffff-no-rj';
        $singer->date_of_birth = '1988/5/16';
        $singer->biography = 'Tuấn Hưng (sinh ngày 5 tháng 10 năm 1978 tại Hà Nội) tên đầy đủ là Nguyễn Tuấn Hưng, là một ca sĩ nhạc trẻ người Việt Nam. Anh được công chúng biết đến qua vai trò là thành viên của nhóm nhạc Quả dưa hấu - nhóm nhạc nổi tiếng của Hà Nội vào những năm cuối thế kỉ 20 và qua vai trò một ca sĩ solo với các ca khúc Cầu vồng khuyết, Tình là gì, Dĩ vãng cuộc tình, Gửi ngàn lời yêu, Nắm lấy tay anh, Tìm lại bầu trời,...

        Năm 2015, Tuấn Hưng, cùng với Đàm Vĩnh Hưng, Mỹ Tâm và Thu Phương đảm nhiệm vị trí giám khảo của chương trình Giọng hát Việt mùa thứ 3.';
        $singer->band = 'Bô lão';
        $singer->hit = 'Đầu tắc kè hoa';
        $singer->information = 'Cập nhật sau nhé!';
        $singer->save();

    }
}
