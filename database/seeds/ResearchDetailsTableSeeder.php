<?php

use Illuminate\Database\Seeder;

class ResearchDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('research_details')->insert([
            [
             'info' => 'ต้องตา วาระกิจ, สัจจาภรณ์ ไวจรรยา และ ณัฐโชติ พรหมฤทธิ์. (2561). “เขียนไทย แอปพลิเคชันฝึกเขียนภาษาไทยสำหรับชาวต่างชาติ.” ใน Proceedings รวมบทความวิจัยนำเสนอใน 6th ASEAN Undergraduate Conference in Computing (AUCC2018), สถาบันเทคโนโลยีพระจอมเกล้าเจ้าคุณทหารลาดกระบัง, กรุงเทพฯ, 23-25 มีนาคม, 2561, 150-157.',
             'publication' => '2561',
             'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'info' => 'ชาญวิทย์ ญาติตาอินทร์, สัจจาภรณ์ ไวจรรยา และ ณัฐโชติ พรหมฤทธิ์. (2561). “ระบบประมวลผลข้อความจากบทวิจารณ์ภาพยนตร์และความคิดเห็นของผู้ชม.” ใน Proceedings รวมบทความวิจัยนำเสนอใน 6th ASEAN Undergraduate Conference in Computing (AUCC2018), สถาบันเทคโนโลยีพระจอมเกล้าเจ้าคุณทหารลาดกระบัง, กรุงเทพฯ, 23-25 มีนาคม, 2561, 2471-2478.',
                'publication' => '2561',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'info' => 'ภัทรกร สุขสงวน, สัจจาภรณ์ ไวจรรยา และ ณัฐโชติ พรหมฤทธิ์. (2561). “ระบบแนะนําภาพยนตร์จากบทวิจารณ์ด้วยวิธีการแบบหลากหลาย.” ใน Proceedings รวมบทความวิจัยนำเสนอใน 6th ASEAN Undergraduate Conference in Computing (AUCC2018), สถาบันเทคโนโลยีพระจอมเกล้าเจ้าคุณทหารลาดกระบัง, กรุงเทพฯ, 23-25 มีนาคม, 2561, 2463-2470.',
                'publication' => '2561',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'info' => 'กนกวรรณ พิมพ์ดีด, สัจจาภรณ์ ไวจรรยา และ ณัฐโชติ พรหมฤทธิ์. (2561). “ระบบตรวจลายมือเขียนอักษรไทยด้วย Convolutional Neural Network.” ใน Proceedings รวมบทความวิจัยนำเสนอใน 6th ASEAN Undergraduate Conference in Computing (AUCC2018), สถาบันเทคโนโลยีพระจอมเกล้าเจ้าคุณทหารลาดกระบัง, กรุงเทพฯ, 23-25 มีนาคม, 2561, 286-292.',
                'publication' => '2561',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'info' => 'Promrit, N., and Sajjaporn Waijanya. (2017). “The Poet Identification Using Convolutional Neural Networks.” Paper presented in the 12th International Conference on Computing and Information Technology (IC2IT 2017), Bangkok, Thailand, 179-187.',
                'publication' => '2560',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'info' => 'Promrit, N., and Sajjaporn Waijanya. (2017). “Convolutional Neural Networks for Thai Poem Classification.” In Proceedings of the 14th International Symposium on Neural Networks (ISNN 2017), Sapporo, Hokodate, and Muroran, Hokkaido, Japan, 449-456.',
                'publication' => '2561',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'info' => 'อรทัย คงธรรม, ณัฐโชติ พรหมฤทธิ์, และ สัจจาภรณ์ ไวจรรยา. (2560). “ระบบตัดพยางค์และแปลงหน่วยเสียงสำหรับตรวจกลอนสุภาพ.” ใน Proceedings รวมบทความวิจัยนำเสนอใน 5th ASEAN Undergraduate Conference in Computing (AUCC2017), มหาวิทยาลัยนเรศวร, พิษณุโลก, 20-23 เมษายน, 2560, 52-60.',
                'publication' => '2560',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'info' => 'อรพรรณ เมฆพายัพ, จันจิรา กำชัยถาวรรัตนะ, สัจจาภรณ์ ไวจรรยา และ ณัฐโชติ พรหมฤทธิ์. (2560). “ครูกลอน: เกมพัฒนาทักษะการแต่งกลอนสุภาพ.” ใน Proceedings รวมบทความวิจัยนำเสนอใน 5th ASEAN Undergraduate Conference in Computing (AUCC2017), มหาวิทยาลัยนเรศวร, พิษณุโลก, 20-23 เมษายน, 2560, 130-137.',
                'publication' => '2560',
                'created_at' => date('Y-m-d H:i:s')
            ]
        ]);
    }
}