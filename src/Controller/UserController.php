<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class UserController extends AbstractController
{
    #[Route('/user', name: 'app_user')]
    public function index(): Response
    {
        $users = [
            [
                'lastname' => 'Doe',
                'firstname' => 'John',
                'birthdate' => '1990-05-15',
                'address' => '123 Main St, Cityville',
                'isSuperHero' => true,
                'about' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'
            ],
            [
                'lastname' => 'Smith',
                'firstname' => 'Jane',
                'birthdate' => '1985-09-23',
                'address' => '456 Elm St, Townsville',
                'isSuperHero' => true,
                'about' => 'Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae.'
            ],
            [
                'lastname' => 'Brown',
                'firstname' => 'Charlie',
                'birthdate' => '1992-12-07',
                'address' => '789 Oak St, Villagetown',
                'isSuperHero' => false,
                'about' => 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.'
            ],
            [
                'lastname' => 'Johnson',
                'firstname' => 'Emma',
                'birthdate' => '1996-08-20',
                'address' => '621 Valley St, Citytown',
                'isSuperHero' => false,
                'about' => 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.'
            ]
        ];

        $lorem = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce porttitor mollis quam eget finibus. Nulla facilisi. Nunc quis tincidunt odio. Nam iaculis egestas dolor eget mollis. Quisque posuere massa sed blandit gravida. Fusce a nunc quis magna ullamcorper vestibulum. Proin varius tincidunt mauris, pharetra mattis lacus. Maecenas at blandit mi. Donec eget tincidunt felis, non malesuada felis.

Suspendisse purus nulla, sollicitudin at quam quis, rutrum varius lorem. Morbi in vestibulum purus. Donec quis vehicula turpis, ut blandit justo. Proin et imperdiet odio. Etiam a porttitor turpis. Fusce a enim vitae felis ultrices elementum a in justo. Nam molestie eleifend ornare. Integer eget purus vel sapien auctor sollicitudin sed ut augue. Ut ut velit ac orci tempor scelerisque. Vivamus vehicula, erat sit amet tristique tincidunt, ante nisl aliquam turpis, in commodo purus elit sed diam. Integer bibendum non lacus id dapibus. Suspendisse ultrices tellus vitae lorem condimentum, sit amet pulvinar dolor vulputate. Aenean finibus enim et nisl faucibus suscipit eu vitae nisl.

Nullam vehicula quis tellus ullamcorper aliquet. Quisque ultricies porttitor est, quis maximus eros cursus ut. Quisque maximus a ligula ut feugiat. Donec eget magna et nisl sagittis cursus. Vestibulum aliquet, arcu ac consequat accumsan, tortor purus porttitor arcu, nec egestas tortor sapien a ligula. Vestibulum rutrum velit id lorem fermentum, sit amet eleifend tellus egestas. Aliquam vel mauris aliquet, posuere purus id, auctor felis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec viverra enim in sem tempus pharetra. Aliquam nec mi eu sem sollicitudin euismod eu at massa. Nam eget consectetur dui, quis sollicitudin quam. In tristique pellentesque tellus, vitae efficitur ex fringilla a. Mauris vel semper quam. Maecenas cursus urna nulla, id faucibus leo dapibus sed. Suspendisse hendrerit odio non mauris ullamcorper, eu molestie eros aliquam. Nullam id ullamcorper leo.

Sed in risus et enim venenatis ornare. Fusce fermentum eu ante in accumsan. Quisque id porttitor neque. Vivamus vel sapien eu elit aliquam gravida. Sed ligula leo, facilisis quis magna nec, auctor interdum turpis. Duis id dapibus dui, condimentum pellentesque tortor. Suspendisse eget eros ac augue elementum finibus non quis ante.

Vivamus maximus auctor lorem non varius. Donec dictum facilisis leo pulvinar pellentesque. Cras at ex sed nunc malesuada condimentum. Vivamus lobortis justo et porttitor feugiat. Quisque ac libero ut augue commodo dictum. Cras malesuada tristique sem, at sagittis magna laoreet non. Morbi molestie pulvinar nulla a blandit. Nullam aliquam, diam ut dictum tincidunt, velit eros pharetra dolor, ornare finibus massa ligula nec augue.

Integer vel neque id dui finibus rutrum. Nunc vestibulum aliquet tincidunt. Donec at cursus augue. Donec ac ullamcorper urna. Maecenas eu turpis sed nibh tristique ultricies. Vivamus accumsan ligula ut feugiat iaculis. Nullam imperdiet tellus eu purus condimentum, eget auctor risus ultricies. Sed augue felis, sollicitudin at aliquam sed, facilisis sit amet ipsum.

Donec eget maximus turpis. Fusce ullamcorper velit nec nisl lobortis vestibulum. Vivamus eleifend diam sem. Duis laoreet libero nibh, a aliquet arcu euismod a. Quisque fringilla nisi orci, molestie luctus justo rhoncus sed. Suspendisse sollicitudin tellus nisi, id posuere sem hendrerit ac. Curabitur in tristique nibh. Nullam molestie congue dapibus. Pellentesque libero turpis, ultrices et pulvinar at, finibus at metus. Cras lacinia purus sit amet massa dapibus hendrerit. Pellentesque eleifend, orci non vulputate volutpat, ipsum urna tempus odio, et ultricies odio lacus a dolor. Nunc commodo sed elit vel molestie.

Phasellus at risus vel felis sagittis convallis et at sem. In vulputate libero nec libero porttitor consequat. Curabitur orci ante, commodo quis dapibus ac, iaculis maximus enim. Etiam at sollicitudin nibh. Integer et neque volutpat sem vulputate eleifend. Quisque fermentum, ligula sed finibus sagittis, nunc arcu ultricies tortor, eu maximus dolor sapien at ipsum. Proin porttitor malesuada dolor, sit amet condimentum sapien ullamcorper nec. Nulla sodales imperdiet odio, sed tempor turpis tincidunt a. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aenean egestas, urna in faucibus bibendum, enim dui blandit enim, egestas mollis nisi eros quis eros.

Nunc congue convallis sem id ornare. Pellentesque feugiat eget nisi in placerat. Phasellus semper, arcu quis gravida ultricies, nunc ipsum condimentum enim, a sodales nibh nisi et magna. Fusce ut risus lacus. Quisque id mattis lacus, sed efficitur erat. Phasellus aliquam orci sit amet nisi mollis ullamcorper. Interdum et malesuada fames ac ante ipsum primis in faucibus. Suspendisse et quam et nisi congue pretium sit amet a arcu. Donec vel sem mattis, molestie massa vel, convallis eros. Aenean euismod eget metus nec feugiat. Suspendisse sit amet quam quis ipsum malesuada dignissim. Donec id consectetur metus. Nulla sit amet massa sem. Suspendisse euismod at diam vel tristique. Ut quis porta dolor, sit amet volutpat urna. Sed sed placerat elit, posuere efficitur purus.

Integer mattis, tortor eu scelerisque convallis, eros metus iaculis enim, vel semper libero eros vel magna. Suspendisse lorem nisi, iaculis placerat maximus sed, ullamcorper quis mi. Fusce efficitur tellus ac cursus dapibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Ut vulputate ornare arcu condimentum auctor. Nullam facilisis diam quam, id malesuada tortor convallis eu. Fusce fermentum hendrerit ex. Phasellus elementum cursus ipsum facilisis tristique. Proin non libero sed nulla condimentum lacinia. Nam viverra, orci id eleifend maximus, mi lorem maximus velit, nec viverra nunc sem at mi. Etiam consequat sem non neque bibendum posuere. Proin libero libero, congue quis sem vitae, vehicula consectetur dolor. Ut ac tellus non mi lobortis luctus eget vel dolor. Aenean dictum lectus massa, et vulputate urna tempor et.

Ut dapibus libero erat. Etiam tellus nisi, dignissim vel lectus quis, posuere eleifend odio. Nam a justo sit amet leo tempus placerat. Ut tincidunt eros sit amet neque porttitor, a ultricies nunc molestie. Donec aliquet dictum dui, sed sollicitudin nibh semper sed. Vestibulum consectetur sit amet ipsum quis rhoncus. Donec tincidunt tristique enim at hendrerit. Nunc iaculis nec tortor non sagittis. Aliquam vel ante volutpat, viverra ante ut, porta ligula. Nullam vitae maximus erat, vel venenatis tortor. Cras eu sodales ligula, sed auctor arcu.

Cras lectus sem, tempus quis est quis, maximus porta nulla. Donec ac leo at mauris blandit scelerisque. Duis et elit sed lorem tincidunt consectetur vel eu augue. Praesent non vehicula elit. Etiam vitae diam a tellus ullamcorper lobortis. Maecenas eget turpis massa. Aliquam erat volutpat. Suspendisse potenti. Aliquam metus quam, scelerisque in massa non, dignissim tincidunt sapien. Etiam commodo nisi ex, non efficitur dolor rutrum eget. Nunc ultrices iaculis lobortis. Sed sed congue lorem. Morbi non arcu id lacus mollis porta. Nulla imperdiet nunc at purus rutrum ornare.

Donec diam est, venenatis quis felis vehicula, aliquet sodales elit. Cras et dolor dapibus, rhoncus quam ut, pharetra nisl. Proin odio ante, faucibus non enim eu, mollis vulputate tortor. Donec eget massa ullamcorper, sodales nibh sed, tempor libero. Fusce dignissim vulputate gravida. Etiam blandit molestie ornare. In imperdiet interdum euismod. Suspendisse sit amet turpis in ex porta rhoncus quis quis mi. Suspendisse potenti. Aliquam tempor luctus nulla non volutpat. In auctor dui ac ullamcorper aliquet. Sed hendrerit vitae ante nec mollis. Curabitur iaculis nunc pulvinar, ornare magna vitae, congue arcu.

Nulla ut eros sed odio blandit iaculis. Cras laoreet ullamcorper pulvinar. Phasellus convallis pretium pulvinar. Aliquam molestie urna non volutpat vehicula. In at condimentum quam. Nam nec fringilla nisi. Pellentesque tristique eleifend feugiat. Cras in ante commodo odio aliquam sollicitudin vitae ut eros. Mauris lobortis neque sit amet ipsum egestas fringilla. Duis sem nisl, condimentum a vehicula quis, varius eget lacus. Integer blandit egestas sapien in pretium.

Integer molestie sodales erat, sit amet sollicitudin urna tincidunt sit amet. Suspendisse elementum tellus vitae rutrum rhoncus. Etiam ullamcorper magna neque, at tincidunt justo sodales eget. Cras mattis eget mi at gravida. Maecenas non odio at dolor tempor facilisis. Curabitur sit amet sem rutrum, pulvinar nisl porttitor, tempus erat. Nam bibendum at velit eget efficitur. Quisque rutrum interdum porta. Nunc quis est id risus gravida ultricies. Cras semper sem sagittis turpis feugiat tincidunt. Praesent quis viverra nisl. Pellentesque at posuere dolor. Vivamus sit amet bibendum dui. Quisque vitae mauris lacinia, dignissim leo nec, consequat tortor. Suspendisse potenti.';

        return $this->render('user/index.html.twig', [
            'controller_name' => 'UserController',
            'users' => $users,
            'lorem' => $lorem
        ]);
    }
}
