import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { AuthComponent } from './administration/auth/auth.component';
import { ConnectComponent } from './administration/connect/connect.component';
import { InscripComponent } from './administration/inscrip/inscrip.component';


const routes: Routes = [
  {path:'',component:AuthComponent},
  {path:'connexion',component:ConnectComponent},
  {path:'inscription',component:InscripComponent}
];


@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
