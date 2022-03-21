import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { AboutComponent } from './about/about.component';
import { FaqComponent } from './faq/faq.component';
import { LoginComponent } from './login/login.component';
import { HomeComponent } from './home/home.component';
import{CreateOrderComponent} from './create-order/create-order.component';
import { ListOrderComponent } from './list-order/list-order.component';
import { UpdateOrderComponent } from './update-order/update-order.component';


const routes: Routes = [
  {path: "about", component:AboutComponent},
  {path: "faq", component:FaqComponent},
  {path: '', redirectTo:'login', pathMatch: 'full'},
  {path:"login", component:LoginComponent},
  {path:"home", component:HomeComponent},
  {path:"createOrder", component:CreateOrderComponent},
  {path: 'createOrder/:id', component:CreateOrderComponent},
  {path:"listOrder", component:ListOrderComponent},
  {path:"updateOrder", component:UpdateOrderComponent},
  {path: 'updateOrder/:id', component:UpdateOrderComponent},

];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
