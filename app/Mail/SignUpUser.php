<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SignUpUser extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public function __construct(public User $user)
    {
        //
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Welcome to Our Website',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'email.signup-email.signup-email',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}




// // Calculate totals
//         $totalPrice = 0;
//         $totalItems = 0;
//         foreach ($cart as $item) {
//             $totalPrice += $item['price'] * $item['quantity'];
//             $totalItems += $item['quantity'];
//         }

//         return response()->json([
//             'totalPrice' => number_format($totalPrice),
//             'totalItems' => $totalItems,
//             'itemTotal' => number_format($cart[$id]['price'] * $quantity)
// //         ]);

//             $cart['total'] = $totalCartPrice;
//             $cart['count'] = count($cart['items']);
    //  $row.closest('tr').find('.item-total').text('Rs. ' + updatedItem
    //                             .item_total);
    //                         $('#cart-total').text('Rs. ' + updatedCart.total);
    //                         $('#cart-count').text(updatedCart.count + ' items');
