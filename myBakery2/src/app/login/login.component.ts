import { HttpClient } from '@angular/common/http';
import { Component, OnInit } from '@angular/core';
import { FormBuilder, FormGroup } from '@angular/forms';
import { Router } from '@angular/router';
import {ApiService} from '../api.service';

@Component({
  selector: 'app-login',
  templateUrl: './login.component.html',
  styleUrls: ['./login.component.css']
})
export class LoginComponent implements OnInit {

  email:any;
  password:any;

  public loginForm !: FormGroup
  constructor(private service:ApiService, private formBuilder: FormBuilder, private http: HttpClient, private router: Router) { }

  ngOnInit(): void {
    this.loginForm = this.formBuilder.group({
      email: [''],
      password: ['']
    })
  }

  login() {

    if(this.email == "fifa@gmail.com" && this.password == '1234'){
      alert("Welcome to Aesthetic Bakery")
      this.router.navigate(['home'])
    }
    else if (this.email == "nabila@gmail.com" && this.password == '1234'){
      alert("You are successfully login")
      this.router.navigate(['home'])

    }
    else if (this.email == "alisya@gmail.com" && this.password == '1234'){
      alert("Welcome to Aesthetic Bakery")
      this.router.navigate(['home'])

    }
    else if (this.email == "fahsa@gmail.com" && this.password == '1234'){
      alert("Welcome to Aesthetic Bakery")
      this.router.navigate(['custpage'])

    }
    else{
      alert("Incorrect email or password!!")
    }

  }

}
