package com.mrepol742.smartsync;

import androidx.annotation.NonNull;
import androidx.appcompat.app.ActionBar;
import androidx.appcompat.app.AppCompatActivity;
import androidx.fragment.app.FragmentTransaction;

import android.os.Bundle;
import android.view.MenuItem;
import android.widget.ArrayAdapter;
import android.widget.AutoCompleteTextView;

import com.google.android.material.bottomnavigation.BottomNavigationView;
import com.google.android.material.navigation.NavigationBarView;
import com.mrepol742.smartsync.fragment.Account;
import com.mrepol742.smartsync.fragment.Connection;
import com.mrepol742.smartsync.fragment.Home;
import com.mrepol742.smartsync.fragment.Security;

public class MainActivity extends AppCompatActivity {

    BottomNavigationView navigationView;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        navigationView = findViewById(R.id.navigation);
        navigationView.setOnItemSelectedListener(selectedListener);

        getSupportFragmentManager().beginTransaction()
                .replace(R.id.content, new Home(), "")
                .commit();
    }

    private final NavigationBarView.OnItemSelectedListener selectedListener = menuItem -> {
        int itemId = menuItem.getItemId();
        if (itemId == R.id.nav_home) {
            getSupportFragmentManager().beginTransaction()
                    .replace(R.id.content, new Home(), "")
                    .commit();
            return true;
        } else if (itemId == R.id.nav_security) {
            getSupportFragmentManager().beginTransaction()
                    .replace(R.id.content, new Security(), "")
                    .commit();
            return true;
        } else if (itemId == R.id.nav_connection) {
            getSupportFragmentManager().beginTransaction()
                    .replace(R.id.content, new Connection(), "")
                    .commit();
            return true;
        } else if (itemId == R.id.nav_account) {
            getSupportFragmentManager().beginTransaction()
                    .replace(R.id.content, new Account(), "")
                    .commit();
            return true;
        }
        throw new IllegalStateException("Unexpected value: " + menuItem.getItemId());
    };
}