<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Cart;
use App\Models\User;
use App\Models\Admin;
use App\Models\Address;
use App\Models\Contact;
use App\Models\Product;
use App\Models\Category;
use App\Models\Transaction;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RelationModelTest extends TestCase
{
    public function testUserAndContact()
    {
        $user = User::first();
        $UserToContact = $user->contact()->get();
        $contact = Contact::first();
        $ContactToUser = $contact->user()->first();
        // check if relation exist
        $this->assertNotNull($UserToContact);
        $this->assertNotNull($ContactToUser);
        // check one to many
        $this->assertGreaterThan(1, $UserToContact->count());
    }

    public function testUserAndAddress()
    {
        $address = Address::first();
        $user = $address->user()->first();
        $this->assertNotNull($user);
    }

    public function testAdminAndCategory()
    {
        $category = Category::first();
        $admin = $category->admin()->first();
        $this->assertNotNull($admin);
        $this->assertSame($category->id_admin, $admin->id);
    }

    public function testAdminAndProduct()
    {
        $admin = Admin::first();
        $product = $admin->product()->get()->first();
        $this->assertSame($admin->id, $product->id_admin);
        $this->assertNotNull($product);
    }

    public function testProductAndCategory()
    {
        $product = Product::first();
        $category = $product->category()->first();
        $this->assertNotNull($category);
        $this->assertSame($product->id_category, $category->id);
    }

    public function testUserAndCart()
    {
        $user = User::first();
        $cart = $user->cart()->get()->first();
        $this->assertNotNull($cart);
        $this->assertSame($user->id, $cart->id_user);
    }

    public function testCartAndProduct()
    {
        $cart = Cart::first();
        $product = $cart->product()->first();
        $this->assertNotNull($product);
        $this->assertSame($cart->id_product, $product->id);
    }

    public function testUserAndTransaction()
    {
        $transaction = Transaction::first();
        $user = $transaction->user()->first();
        $this->assertNotNull($user);

        $this->assertSame($transaction->id_user, $user->id);
    }

    public function testProductAndTransaction()
    {
        $transaction = Transaction::first();
        $product = $transaction->product()->first();
        $this->assertNotNull($product);
        $this->assertSame($transaction->id_product, $product->id);
    }
}
