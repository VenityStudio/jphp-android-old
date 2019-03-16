# Activity

- **class** `Activity` (`php\android\app\Activity`) **extends** [`Context`](classes/php/android/content/Context.md)
- **source** `php/android/app/Activity.php`

---

#### Methods

- `->`[`setTitle()`](#method-settitle)
- `->`[`setContentView()`](#method-setcontentview)
- `->`[`setContentViewById()`](#method-setcontentviewbyid)
- `->`[`findById()`](#method-findbyid) **common.deprecated**
- `->`[`findViewById()`](#method-findviewbyid)
- `->`[`setOnCreate()`](#method-setoncreate) - _On Activity create_
- `->`[`setOnKeyDown()`](#method-setonkeydown) - _Callback params: int $keyCode_
- `->`[`setOnKeyUp()`](#method-setonkeyup) - _Callback params: int $keyCode_
- `->`[`setOnKeyLongPress()`](#method-setonkeylongpress) - _Callback params: int $keyCode_
- `->`[`setOnKeyMultiple()`](#method-setonkeymultiple) - _Callback params: int $keyCode_
- `->`[`setOnKeyShortcut()`](#method-setonkeyshortcut) - _Callback params: int $keyCode_
- `->`[`getCurrentFocus()`](#method-getcurrentfocus)
- `->`[`requestWindowFeature()`](#method-requestwindowfeature)
- `->`[`setFeatureDrawableResource()`](#method-setfeaturedrawableresource)
- `->`[`setFeatureDrawableAlpha()`](#method-setfeaturedrawablealpha)
- `->`[`getLayoutInflater()`](#method-getlayoutinflater)
- `->`[`getTitle()`](#method-gettitle)
- `->`[`getTitleColor()`](#method-gettitlecolor)
- `->`[`setProgressBarVisibility()`](#method-setprogressbarvisibility)
- `->`[`setProgressBarIndeterminateVisibility()`](#method-setprogressbarindeterminatevisibility)
- `->`[`setProgressBarIndeterminate()`](#method-setprogressbarindeterminate)
- `->`[`setProgress()`](#method-setprogress)
- `->`[`setSecondaryProgress()`](#method-setsecondaryprogress)
- `->`[`setVolumeControlStream()`](#method-setvolumecontrolstream)
- `->`[`getVolumeControlStream()`](#method-getvolumecontrolstream)
- `->`[`runOnUiThread()`](#method-runonuithread)
- See also in the parent class [Context](classes/php/android/content/Context.md)

---
# Methods

<a name="method-settitle"></a>

### setTitle()
```php
setTitle(string $title): void
```

---

<a name="method-setcontentview"></a>

### setContentView()
```php
setContentView(php\android\view\View $view): void
```

---

<a name="method-setcontentviewbyid"></a>

### setContentViewById()
```php
setContentViewById(int $id): void
```

---

<a name="method-findbyid"></a>

### findById()
```php
findById(int $id): php\android\view\View
```

---

<a name="method-findviewbyid"></a>

### findViewById()
```php
findViewById(int $id): php\android\view\View
```

---

<a name="method-setoncreate"></a>

### setOnCreate()
```php
setOnCreate(callable $callback): void
```
On Activity create


---

<a name="method-setonkeydown"></a>

### setOnKeyDown()
```php
setOnKeyDown(callable $callback): void
```
Callback params: int $keyCode

---

<a name="method-setonkeyup"></a>

### setOnKeyUp()
```php
setOnKeyUp(callable $callback): void
```
Callback params: int $keyCode

---

<a name="method-setonkeylongpress"></a>

### setOnKeyLongPress()
```php
setOnKeyLongPress(callable $callback): void
```
Callback params: int $keyCode

---

<a name="method-setonkeymultiple"></a>

### setOnKeyMultiple()
```php
setOnKeyMultiple(callable $callback): void
```
Callback params: int $keyCode

---

<a name="method-setonkeyshortcut"></a>

### setOnKeyShortcut()
```php
setOnKeyShortcut(callable $callback): void
```
Callback params: int $keyCode

---

<a name="method-getcurrentfocus"></a>

### getCurrentFocus()
```php
getCurrentFocus(): php\android\view\View
```

---

<a name="method-requestwindowfeature"></a>

### requestWindowFeature()
```php
requestWindowFeature(int $featureId): bool
```

---

<a name="method-setfeaturedrawableresource"></a>

### setFeatureDrawableResource()
```php
setFeatureDrawableResource(int $featureId, int $resId): void
```

---

<a name="method-setfeaturedrawablealpha"></a>

### setFeatureDrawableAlpha()
```php
setFeatureDrawableAlpha(int $featureId, int $alpha): void
```

---

<a name="method-getlayoutinflater"></a>

### getLayoutInflater()
```php
getLayoutInflater(): php\android\view\LayoutInflater
```

---

<a name="method-gettitle"></a>

### getTitle()
```php
getTitle(): string
```

---

<a name="method-gettitlecolor"></a>

### getTitleColor()
```php
getTitleColor(): int
```

---

<a name="method-setprogressbarvisibility"></a>

### setProgressBarVisibility()
```php
setProgressBarVisibility(bool $visibility): void
```

---

<a name="method-setprogressbarindeterminatevisibility"></a>

### setProgressBarIndeterminateVisibility()
```php
setProgressBarIndeterminateVisibility(bool $visibility): void
```

---

<a name="method-setprogressbarindeterminate"></a>

### setProgressBarIndeterminate()
```php
setProgressBarIndeterminate(bool $indeterminate): void
```

---

<a name="method-setprogress"></a>

### setProgress()
```php
setProgress(int $progress): void
```

---

<a name="method-setsecondaryprogress"></a>

### setSecondaryProgress()
```php
setSecondaryProgress(int $progress): void
```

---

<a name="method-setvolumecontrolstream"></a>

### setVolumeControlStream()
```php
setVolumeControlStream(int $streamType): void
```

---

<a name="method-getvolumecontrolstream"></a>

### getVolumeControlStream()
```php
getVolumeControlStream(): int
```

---

<a name="method-runonuithread"></a>

### runOnUiThread()
```php
runOnUiThread(callable $callback): void
```