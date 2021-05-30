package com.example.usingpreferences;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.TextView;

public class MainActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        /* DEklarasi dan Menginisialisasi variable nama dengan Label Nama dari Layout MainActivity */
        TextView nama = findViewById(R.id.tv_namaMain);

        /* Men-set Label Nama dengan data User sedang Login dari Preferences */
        nama.setText(Preferences.getLoggedInUser(getBaseContext()));

        /* Men-set Status dan User yang sedang Login mendjadi default atau kosong di
        Data Preferences. Kemudian menuju ke LoginActivity */
        findViewById(R.id.button_logoutMain).setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                // Menghapus Status Login dan kembali ke Login Activity
                Preferences.clearLoggedInUser(getBaseContext());
                startActivity(new Intent(getBaseContext(),LoginActivity.class));
                finish();
            }
        });

    }
}