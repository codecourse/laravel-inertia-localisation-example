<?php

use App\Lang\Lang;

it('can get an associated language label', function () {
    expect(Lang::from('de')->label())->toBe('Deutsch');
});
