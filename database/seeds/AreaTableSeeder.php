<?php

use Illuminate\Database\Seeder;

class AreaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $areas = 
        [
			[
				'name' => 'Banteay Meanchey',
				'children' => [
					['name' => 'Mongkol Borei'],
					['name' => 'Phnum Srok'],
					['name' => 'Preah Netr Preah'],
					['name' => 'Ou Chrov'],
					['name' => 'Serei Saophoan'],
					['name' => 'Thma Puok'],
					['name' => 'Svay Chek'],
					['name' => 'Malai'],
					['name' => 'Poay Paet'],
				],
			],
			[
				'name' => 'Battambang',
				'children' => [
					['name' => 'Banan'],
					['name' => 'Thma Koul'],
					['name' => 'Battambang'],
					['name' => 'Bavel'],
					['name' => 'Ek Phnom'],
					['name' => 'Moung Ruessei'],
					['name' => 'Rukhak Kiri'],
					['name' => 'Rotanak Mondol'],
					['name' => 'Sangkae'],
					['name' => 'Samlout'],
					['name' => 'Sampov Loun'],
					['name' => 'Phnum Proek'],
					['name' => 'Kamrieng'],
					['name' => 'Koas Krala'],
				],
			],
			[
				'name' => 'Kampong Cham',
				'children' => [
					['name' => 'Batheay'],
					['name' => 'Chamkar Leu'],
					['name' => 'Cheung Prey'],
					['name' => 'Kampong Cham City'],
					['name' => 'Kampong Siem'],
					['name' => 'Kang Meas'],
					['name' => 'Koh Sotin'],
					['name' => 'Prey Chhor'],
					['name' => 'Srey Santhor'],
					['name' => 'Stueng Trang'],
				],
			],
			[
				'name' => 'Kampong Chhnang',
				'children' => [
					['name' => 'Baribour'],
					['name' => 'Chol Kiri'],
					['name' => 'Kampong Chhnang'],
					['name' => 'Kampong Leaeng'],
					['name' => 'Kampong Tralach'],
					['name' => 'Rolea B\'ier'],
					['name' => 'Sameakki'],
					['name' => 'Tuek Phos'],
				],
			],
			[
				'name' => 'Kampong Speu',
				'children' => [
					['name' => 'Basedth'],
					['name' => 'Chbar Mon'],
					['name' => 'Kong Pisei'],
					['name' => 'Aoral'],
					['name' => 'Odongk'],
					['name' => 'Phnom Sruoch'],
					['name' => 'Samraong Tong'],
					['name' => 'Thpong'],
				],
			],
			[
				'name' => 'Kampong Thom',
				'children' => [
					['name' => 'Baray'],
					['name' => 'Kampong Svay'],
					['name' => 'Stueng Saen'],
					['name' => 'Prasat Balangk'],
					['name' => 'Prasat Sambour'],
					['name' => 'Sandaan'],
					['name' => 'Santuk'],
					['name' => 'Stoung'],
				],
			],
			[
				'name' => 'Kampot',
				'children' => [
					['name' => 'Angkor Chey'],
					['name' => 'Banteay Meas'],
					['name' => 'Chhuk'],
					['name' => 'Chum Kiri'],
					['name' => 'Dorng Tong'],
					['name' => 'Kampong Trach'],
					['name' => 'Teouk Chhou'],
					['name' => 'Kampot'],
				],
			],
			[
				'name' => 'Kandal',
				'children' => [
					['name' => 'Kandal Stueng'],
					['name' => 'Kien Svay'],
					['name' => 'Khsach Kandal'],
					['name' => 'Koh Thum'],
					['name' => 'Leuk Daek'],
					['name' => 'Lvea Aem'],
					['name' => 'Mukh Kamphool'],
					['name' => 'Angk Snuol'],
					['name' => 'Ponhea Leu'],
					['name' => 'S\'ang'],
					['name' => 'Krong Ta Khmau'],
				],
			],
			[
				'name' => 'Koh Kong',
				'children' => [
					['name' => 'Botum Sakor'],
					['name' => 'Kiri Sakor'],
					['name' => 'Koh Kong'],
					['name' => 'Khemara Phoumin'],
					['name' => 'Mondol Seima'],
					['name' => 'Srae Ambel'],
					['name' => 'Thma Bang'],
				],
			],
			[
				'name' => 'Kratié',
				'children' => [
					['name' => 'Chhlong'],
					['name' => 'Chitr Borei'],
					['name' => 'Krong Kratie'],
					['name' => 'Preaek Prasob'],
					['name' => 'Sombo'],
					['name' => 'Snoul'],
				],
			],
			[
				'name' => 'Mondulkiri',
				'children' => [
					['name' => 'Kaev Seima'],
					['name' => 'Kaoh Nheaek'],
					['name' => 'Ou Reang'],
					['name' => 'Pech Chreada'],
					['name' => 'Krong Saen Monorom'],
				],
			],
			[
				'name' => 'Oddar Meancheay',
				'children' => [
					['name' => 'Anlong Veaeng'],
					['name' => 'Banteay Ampil'],
					['name' => 'Chong Kal'],
					['name' => 'Krong Samraong'],
					['name' => 'Trapeang Prasat'],
				],
			],
			[
				'name' => 'reah Vihear',
				'children' => [
					['name' => 'Chey Saen'],
					['name' => 'Chhaeb'],
					['name' => 'Choam Khsant'],
					['name' => 'Kulen'],
					['name' => 'Rovieng'],
					['name' => 'Krong Preah Vihear'],
					['name' => 'Sangkom Thmei'],
					['name' => 'Tbaeng Mean Chey'],
				],
			],
			[
				'name' => 'Prey Veng',
				'children' => [
					['name' => 'Ba Phnum'],
					['name' => 'Kamchay Mear'],
					['name' => 'Kampong Trabaek'],
					['name' => 'Kanhchriech'],
					['name' => 'Me Sang'],
					['name' => 'Peam Chor'],
					['name' => 'Peam Ro'],
					['name' => 'Pea Reang'],
					['name' => 'Por Reang'],
					['name' => 'Preah Sdach'],
					['name' => 'Prey Veaeng'],
					['name' => 'Sithor Kandal'],
					['name' => 'vay Ontor'],
				],
			],
			[
				'name' => 'Pursat',
				'children' => [
					['name' => 'Bakan'],
					['name' => 'Kandieng'],
					['name' => 'Krakor'],
					['name' => 'Phnum Kravanh'],
					['name' => 'Krong Pursat'],
					['name' => 'Veal Veaeng'],
				],
			],
			[
				'name' => 'Ratanakiri',
				'children' => [
					['name' => 'Andoung Meas'],
					['name' => 'Krong Banlung'],
					['name' => 'Bar Kaev'],
					['name' => 'Koun Mom'],
					['name' => 'Lumphat'],
					['name' => 'Ou Chum'],
					['name' => 'Ou Ya Dav'],
					['name' => 'Ta Veaeng'],
					['name' => 'Veun Sai'],
				],
			],
			[
				'name' => 'Siem Reap',
				'children' => [
					['name' => 'Angkor Chum'],
					['name' => 'Angkor Thom'],
					['name' => 'Banteay Srei'],
					['name' => 'Chi Kraeng'],
					['name' => 'Kralanh'],
					['name' => 'Puok'],
					['name' => 'Prasat Bakong'],
					['name' => 'Siem Reap'],
					['name' => 'Sout Nikom'],
					['name' => 'Srei Snam'],
					['name' => 'Svay Leu'],
					['name' => 'Varin'],
				],
			],
			[
				'name' => 'AlStung Treng',
				'children' => [
					['name' => 'Sesan'],
					['name' => 'Siem Bouk'],
					['name' => 'Siem Pang'],
					['name' => 'Krong Stung Treng'],
					['name' => 'Thala Barivat'],
				],
			],
			[
				'name' => 'Svay Rieng',
				'children' => [
					['name' => 'Chantrea'],
					['name' => 'Kampong Rou'],
					['name' => 'Rumduol'],
					['name' => 'Romeas Haek'],
					['name' => 'Svay Chrum'],
					['name' => 'Krong Svay Rieng'],
					['name' => 'Svay Teab'],
					['name' => 'Krong Bavet'],
				],
			],
			[
				'name' => 'Takéo',
				'children' => [
					['name' => 'Angkor Borei'],
					['name' => 'Bati'],
					['name' => 'Bourei Cholsar'],
					['name' => 'Kiri Vong'],
					['name' => 'Kaoh Andaet'],
					['name' => 'Prey Kabbas'],
					['name' => 'Samraong'],
					['name' => 'Krong Doun Kaev'],
					['name' => 'Tram Kak'],
					['name' => 'Treang'],
				],
			],
			[
				'name' => 'Kep',
				'children' => [
					['name' => 'Krong Keb'],
					['name' => 'Damnak Chang\'Eur'],
				],
			],
			[
				'name' => 'Pailin',
				'children' => [
					['name' => 'Pailin'],
					['name' => 'Sala Krao'],
				],
			],
			[
				'name' => 'Phnom Penh',
				'children' => [
					['name' => 'Chamkarmon'],
					['name' => 'Daun Penh'],
					['name' => 'Prampir Makara'],
					['name' => 'Toul Kork'],
					['name' => 'Dangkor'],
					['name' => 'Meanchey'],
					['name' => 'Russey Keo'],
					['name' => 'Por Sen Chey'],
					['name' => 'Chbar Ampov'],
					['name' => 'Sen Sok'],
					['name' => 'Chroy Changvar'],
					['name' => 'Praek Phnov'],
				],
			],
			[
				'name' => 'Preah Sihanouk',
				'children' => [
					['name' => 'Krong Preah Sihanouk'],
					['name' => 'Steung Hav'],
					['name' => 'Prey Nob'],
					['name' => 'Kampong Seila'],
				],
			],
			[
				'name' => 'Tbong Khmum',
				'children' => [
					['name' => 'Dombae'],
					['name' => 'Krouch Chhma'],
					['name' => 'Memot'],
					['name' => 'Ou Reang Ov'],
					['name' => 'Ponhea Kraek'],
					['name' => 'Tboung Khmum'],
					['name' => 'Krong Suong'],
				],
			],
        ];

        foreach ($areas as $area) {
            \App\Models\Area::create($area);
        }
    }
}
